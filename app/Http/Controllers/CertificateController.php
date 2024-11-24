<?php

namespace App\Http\Controllers;

use App\Exports\CertificatesExport;
use App\Models\Certificate;
use App\Models\CertificateType;
use App\Models\Chef;
use App\Models\Log;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CertificateController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->only(['destroy']);
    }

    public function index()
    {
        $certificates = Certificate::with(['certificateType', 'chef', 'restaurant'])->select('id', 'certificate_type_id', 'chef_id', 'restaurant_id', 'start_date', 'end_date', 'status', 'remarks')->filter()->orderBy('id', 'desc')->paginate(25);
        $certificateTypes = CertificateType::select('id', 'name')->get();
        $restaurants = Restaurant::select('id', 'name')->get();
        $chefs = Chef::select('id', 'name')->get();

        $data = compact('certificates', 'certificateTypes', 'restaurants', 'chefs');
        return view('certificates.index', $data);
    }

    public function new()
    {
        $certificateTypes = CertificateType::select('id', 'name')->get();
        $restaurants = Restaurant::select('id', 'name')->get();
        $chefs = Chef::select('id', 'name')->get();

        $data = compact('certificateTypes', 'restaurants', 'chefs');
        return view('certificates.new', $data);
    }

    public function create(Request $request)
    {
        $request->validate([
            'certificate_type_id' => 'required|exists:certificate_types,id',
            'start_date' => 'required|date',
            'status' => 'required|in:active,expired,canceled',
        ]);

        if ($request->hasFile('document')) {
            $file = $request->file('document');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/documents/', $filename);
            $document_path = '/uploads/documents/' . $filename;
        }

        $certificate = Certificate::create([
            'certificate_type_id' => $request->certificate_type_id,
            'chef_id' => $request->chef_id,
            'restaurant_id' => $request->restaurant_id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'status' => $request->status,
            'document' => $document_path ?? null,
            'remarks' => $request->remarks,
        ]);

        $text = ucwords(auth()->user()->name) . " created Certificate: " . $certificate->id . ", datetime: " . now();
        Log::create([
            'text' => $text,
        ]);

        return redirect()->route('certificates')->with('success', 'Certificate Created Successfully!');
    }

    public function show(Certificate $certificate)
    {
        return view('certificates.show', compact('certificate'));
    }

    public function edit(Certificate $certificate)
    {
        return view('certificates.edit', compact('certificate'));
    }

    public function update(Certificate $certificate, Request $request)
    {
        $request->validate([
            'start_date' => 'required|date',
            'status' => 'required|in:active,expired,canceled',
        ]);

        $document_path = $certificate->document;

        if ($request->hasFile('document')) {
            $file = $request->file('document');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/documents/', $filename);
            $document_path = '/uploads/documents/' . $filename;
        }

        $certificate->update([
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'status' => $request->status,
            'document' => $document_path,
            'remarks' => $request->remarks,
        ]);

        $text = ucwords(auth()->user()->name) . ' updated Certificate: ' . $certificate->id . ", datetime: " . now();
        Log::create([
            'text' => $text,
        ]);

        return redirect()->route('certificates')->with('success', 'Certificate Updated Successfully!');
    }

    public function destroy(Certificate $certificate)
    {
        $text = ucwords(auth()->user()->name) . " deleted Certificate: " . $certificate->id . ", datetime: " . now();

        Log::create([
            'text' => $text,
        ]);
        $certificate->delete();

        return redirect()->back()->with('success', 'Certificate Deleted Successfully!');
    }

    public function export()
    {
        return Excel::download(new CertificatesExport, 'certificates.xlsx');
    }
}
