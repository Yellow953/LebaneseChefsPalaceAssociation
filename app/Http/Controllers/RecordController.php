<?php

namespace App\Http\Controllers;

use App\Exports\RecordsExport;
use App\Models\Chef;
use App\Models\Log;
use App\Models\Record;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class RecordController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->only(['destroy']);
    }

    public function index()
    {
        $records = Record::with('chef')->select('id', 'title', 'description', 'chef_id', 'category', 'achievement_value', 'unit', 'achieved_on', 'location')->filter()->orderBy('id', 'desc')->paginate(25);
        $chefs = Chef::select('id', 'name')->get();

        $data = compact('records', 'chefs');
        return view('records.index', $data);
    }

    public function new()
    {
        $chefs = Chef::select('id', 'name')->get();

        $data = compact('chefs');
        return view('records.new', $data);
    }

    public function create(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:records|max:255',
            'chef_id' => 'required|exists:chefs,id',
            'category' => 'required|string|max:255',
            'achievement_value' => 'required|numeric|min:0',
            'unit' => 'required|string|max:255',
            'achieved_on' => 'date|required',
            'location' => 'required|string|max:255'
        ]);

        if ($request->hasFile('certificate')) {
            $file = $request->file('certificate');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/certificate/', $filename);
            $certificate_path = '/uploads/certificate/' . $filename;
        }

        Record::create([
            'title' => $request->title,
            'description' => $request->description,
            'chef_id' => $request->chef_id,
            'category' => $request->category,
            'achievement_value' => $request->achievement_value,
            'unit' => $request->unit,
            'achieved_on' => $request->achieved_on,
            'location' => $request->location,
            'certificate' => $certificate_path ?? null,
        ]);

        $text = ucwords(auth()->user()->name) . " created Record: " . $request->title . ", datetime: " . now();
        Log::create([
            'text' => $text,
        ]);

        return redirect()->route('records')->with('success', 'Record created successfully!');
    }

    public function edit(Record $record)
    {
        return view('records.edit', compact('record'));
    }

    public function update(Record $record, Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'category' => 'required|string|max:255',
            'achievement_value' => 'required|numeric|min:0',
            'unit' => 'required|string|max:255',
            'achieved_on' => 'date|required',
            'location' => 'required|string|max:255'
        ]);

        if ($request->hasFile('certificate')) {
            $file = $request->file('certificate');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/certificate/', $filename);
            $certificate_path = '/uploads/certificate/' . $filename;
        }

        $record->update([
            'title' => $request->title,
            'description' => $request->description,
            'category' => $request->category,
            'achievement_value' => $request->achievement_value,
            'unit' => $request->unit,
            'achieved_on' => $request->achieved_on,
            'location' => $request->location,
            'certificate' => $certificate_path ?? $record->certificate,
        ]);

        $text = ucwords(auth()->user()->name) . " updated Record: " . $record->title . ", datetime: " . now();
        Log::create([
            'text' => $text,
        ]);

        return redirect()->route('records')->with('success', 'Record updated successfully!');
    }

    public function destroy(Record $record)
    {
        $text = ucwords(auth()->user()->name) . " deleted Record: " . $record->title . ", datetime: " . now();

        Log::create([
            'text' => $text,
        ]);
        $record->delete();

        return redirect()->back()->with('success', 'Record deleted successfully!');
    }

    public function export()
    {
        return Excel::download(new RecordsExport, 'records.xlsx');
    }
}
