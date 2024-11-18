<?php

namespace App\Http\Controllers;

use App\Exports\InsurancesExport;
use App\Models\Chef;
use App\Models\Insurance;
use App\Models\InsuranceType;
use App\Models\Log;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class InsuranceController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->only(['destroy']);
    }

    public function index()
    {
        $insurances = Insurance::with(['insuranceType', 'chef', 'restaurant'])->select('id', 'policy_number', 'insurance_type_id', 'chef_id', 'restaurant_id', 'start_date', 'end_date', 'status', 'remarks')->filter()->orderBy('id', 'desc')->paginate(25);
        $insuranceTypes = InsuranceType::select('id', 'name')->get();
        $restaurants = Restaurant::select('id', 'name')->get();
        $chefs = Chef::select('id', 'name')->get();

        $data = compact('insurances', 'insuranceTypes', 'restaurants', 'chefs');
        return view('insurances.index', $data);
    }

    public function new()
    {
        $insuranceTypes = InsuranceType::select('id', 'name')->get();
        $restaurants = Restaurant::select('id', 'name')->get();
        $chefs = Chef::select('id', 'name')->get();

        $data = compact('insuranceTypes', 'restaurants', 'chefs');
        return view('insurances.new', $data);
    }

    public function create(Request $request)
    {
        $request->validate([
            'policy_number' => 'required|unique:insurances|max:255',
            'insurance_type_id' => 'required|exists:insurance_types,id',
            'start_date' => 'required|date',
            'status' => 'required|in:active,expired,canceled',
        ]);

        if ($request->hasFile('document')) {
            $file = $request->file('document');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/documents/', $filename);
            $document_path = '/uploads/documents/' . $filename;
        }

        Insurance::create([
            'policy_number' => $request->policy_number,
            'insurance_type_id' => $request->insurance_type_id,
            'chef_id' => $request->chef_id,
            'restaurant_id' => $request->restaurant_id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'status' => $request->status,
            'document' => $document_path ?? null,
            'remarks' => $request->remarks,
        ]);

        $text = ucwords(auth()->user()->name) . " created Insurance: " . $request->policy_number . ", datetime: " . now();
        Log::create([
            'text' => $text,
        ]);

        return redirect()->route('insurances')->with('success', 'Insurance created successfully!');
    }

    public function edit(Insurance $insurance)
    {
        $insuranceTypes = InsuranceType::select('id', 'name')->get();
        $restaurants = Restaurant::select('id', 'name')->get();
        $chefs = Chef::select('id', 'name')->get();

        $data = compact('insuranceTypes', 'restaurants', 'chefs', 'insurance');
        return view('insurances.edit', $data);
    }

    public function update(Insurance $insurance, Request $request)
    {
        $request->validate([
            'policy_number' => 'required|max:255|unique:insurances,policy_number,' . $insurance->id,
            'insurance_type_id' => 'required|exists:insurance_types,id',
            'start_date' => 'required|date',
            'status' => 'required|in:active,expired,canceled',
        ]);

        $document_path = $insurance->document;

        if ($request->hasFile('document')) {
            $file = $request->file('document');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/documents/', $filename);
            $document_path = '/uploads/documents/' . $filename;
        }

        $insurance->update([
            'policy_number' => $request->policy_number,
            'insurance_type_id' => $request->insurance_type_id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'status' => $request->status,
            'document' => $document_path,
            'remarks' => $request->remarks,
        ]);

        $text = ucwords(auth()->user()->name) . ' updated Insurance: ' . $insurance->policy_number . ", datetime: " . now();
        Log::create([
            'text' => $text,
        ]);

        return redirect()->route('insurances')->with('success', 'Insurance updated successfully!');
    }

    public function destroy(Insurance $insurance)
    {
        $text = ucwords(auth()->user()->name) . " deleted Insurance: " . $insurance->policy_number . ", datetime: " . now();

        Log::create([
            'text' => $text,
        ]);
        $insurance->delete();

        return redirect()->back()->with('success', 'Insurance deleted successfully!');
    }

    public function export()
    {
        return Excel::download(new InsurancesExport, 'insurances.xlsx');
    }
}
