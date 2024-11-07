<?php

namespace App\Http\Controllers;

use App\Exports\ChefsExport;
use App\Models\Log;
use App\Models\Chef;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\File;

class ChefController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $chefs = Chef::select('id', 'name', 'phone', 'dob', 'address', 'rank', 'group_id')->filter()->orderBy('id', 'desc')->paginate(25);

        return view('chefs.index', compact('chefs'));
    }

    public function new()
    {
        return view('chefs.new');
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'phone' => 'required|max:255',
            'dob' => 'required|date',
            'address' => 'required|max:255',
            'rank' => 'required',
            'group_id' => 'required',
        ]);

        if ($request->hasFile('resume')) {
            $file = $request->file('resume');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/resume/', $filename);
            $resume_path = '/uploads/resume/' . $filename;
        }

        if ($request->hasFile('certificate')) {
            $file = $request->file('certificate');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/certificate/', $filename);
            $certificate_path = '/uploads/certificate/' . $filename;
        }

        if ($request->hasFile('identification')) {
            $file = $request->file('identification');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/identification/', $filename);
            $identification_path = '/uploads/identification/' . $filename;
        }

        Chef::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'dob' => $request->dob,
            'address' => $request->address,
            'rank' => $request->rank,
            'feedback' => $request->feedback,
            'resume' => $resume_path ?? null,
            'certificate' => $certificate_path ?? null,
            'identification' => $identification_path ?? null,
            'group_id' => $request->group_id,
        ]);

        $text = ucwords(auth()->user()->name) . " created Chef : " . $request->name . ", datetime :   " . now();
        Log::create([
            'text' => $text,
        ]);

        return redirect()->route('chefs')->with('success', 'Chef created successfully!');
    }

    public function edit(Chef $chef)
    {
        return view('chefs.edit', compact('chef'));
    }

    public function update(Chef $chef, Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'phone' => 'required|max:255',
            'dob' => 'required|date',
            'address' => 'required|max:255',
            'rank' => 'required',
            'group_id' => 'required',
        ]);

        $resume_path = $chef->resume;
        $certificate_path = $chef->certificate;
        $identification_path = $chef->identification;

        if ($request->hasFile('resume')) {
            $file = $request->file('resume');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/resume/', $filename);
            $resume_path = '/uploads/resume/' . $filename;
        }

        if ($request->hasFile('certificate')) {
            $file = $request->file('certificate');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/certificate/', $filename);
            $certificate_path = '/uploads/certificate/' . $filename;
        }

        if ($request->hasFile('identification')) {
            $file = $request->file('identification');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/identification/', $filename);
            $identification_path = '/uploads/identification/' . $filename;
        }

        $chef->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'dob' => $request->dob,
            'address' => $request->address,
            'rank' => $request->rank,
            'feedback' => $request->feedback,
            'resume' => $resume_path,
            'certificate' => $certificate_path,
            'identification' => $identification_path,
            'group_id' => $request->group_id,
        ]);

        if ($chef->name != trim($request->name)) {
            $text = ucwords(auth()->user()->name) . ' updated Chef ' . $chef->name . " to " . $request->name . ", datetime :   " . now();
        } else {
            $text = ucwords(auth()->user()->name) . ' updated Chef ' . $chef->name . ", datetime :   " . now();
        }

        Log::create([
            'text' => $text,
        ]);

        return redirect()->route('chefs')->with('success', 'Chef updated successfully!');
    }

    public function destroy(Chef $chef)
    {
        if ($chef->can_delete()) {
            $text = ucwords(auth()->user()->name) . " deleted Chef : " . $chef->name . ", datetime :   " . now();

            Log::create([
                'text' => $text,
            ]);
            $chef->delete();

            return redirect()->back()->with('error', 'Chef deleted successfully!');
        } else {
            return redirect()->back()->with('error', 'Unothorized Access...');
        }
    }

    public function export()
    {
        return Excel::download(new ChefsExport, 'chefs.xlsx');
    }

    public function download_file(Request $request, Chef $chef)
    {
        switch ($request->type) {
            case 'identification':
                $filePath = public_path($chef->identification);
                break;
            case 'certificate':
                $filePath = public_path($chef->certificate);
                break;
            case 'identification':
                $filePath = public_path($chef->identification);
                break;
        }

        if (File::exists($filePath)) {
            return response()->download($filePath);
        }

        return redirect()->back()->with('error', 'Identification scan not found.');
    }
}
