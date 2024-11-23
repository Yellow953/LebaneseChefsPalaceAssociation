<?php

namespace App\Http\Controllers;

use App\Models\Chef;
use App\Models\Group;
use App\Models\Insurance;
use App\Models\InsuranceApplication;
use App\Models\InsuranceType;
use App\Models\Log;
use Illuminate\Http\Request;

class InsuranceApplicationController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->only(['destroy']);
    }

    public function index()
    {
        $insurance_applications = InsuranceApplication::with(['insuranceType'])->select('id', 'insurance_type_id', 'name', 'phone', 'address', 'rank', 'dob', 'maritial_status', 'number_of_kids', 'health_status', 'company_name', 'work_location', 'salary', 'work_description')->filter()->orderBy('id', 'desc')->paginate(25);
        $insuranceTypes = InsuranceType::select('id', 'name')->get();

        $data = compact('insurance_applications', 'insuranceTypes');
        return view('insurance_applications.index', $data);
    }

    public function new()
    {
        $insuranceTypes = InsuranceType::select('id', 'name')->get();

        $data = compact('insuranceTypes');
        return view('insurance_applications.new', $data);
    }

    public function create(Request $request)
    {
        $request->validate([
            'insurance_type_id' => 'required|exists:insurance_types,id',
            'name' => 'required|string|max:255',
            'phone' => 'required|string',
            'address' => 'required|string',
            'rank' => 'required|string',
            'dob' => 'required|date',
            'maritial_status' => 'required|string'
        ]);

        $insurance_application = InsuranceApplication::create($request->all());

        $text = ucwords(auth()->user()->name) . " created Insurance Application : " . $insurance_application->id . ", datetime: " . now();
        Log::create([
            'text' => $text,
        ]);

        return redirect()->route('insurance_applications')->with('success', 'Insurance Application Created Successfully!');
    }

    public function edit(InsuranceApplication $insurance_application)
    {
        return view('insurance_applications.edit', compact('insurance_application'));
    }

    public function update(InsuranceApplication $insurance_application, Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'dob' => 'required|date',
            'maritial_status' => 'required|string',
            'phone' => 'required|string',
            'address' => 'required|string',
            'rank' => 'required|string',
        ]);

        $insurance_application->update($request->all());

        $text = ucwords(auth()->user()->name) . ' updated Insurance Application: ' . $insurance_application->id . ", datetime: " . now();
        Log::create([
            'text' => $text,
        ]);

        return redirect()->route('insurance_applications')->with('success', 'Insurance Application updated successfully!');
    }

    public function destroy(InsuranceApplication $insurance_application)
    {
        $text = ucwords(auth()->user()->name) . " deleted Insurance Application: " . $insurance_application->id . ", datetime: " . now();

        Log::create([
            'text' => $text,
        ]);
        $insurance_application->delete();

        return redirect()->back()->with('success', 'Insurance Application deleted successfully!');
    }

    public function approve(InsuranceApplication $insurance_application)
    {
        return view('insurance_applications.approve', compact('insurance_application'));
    }

    public function transform(Request $request, InsuranceApplication $insurance_application)
    {
        $request->validate([
            'policy_number' => 'required|unique:insurances|max:255',
            'start_date' => 'required|date',
            'status' => 'required|in:active,expired,canceled',
        ]);

        $chef = Chef::where('name', 'LIKE', "%{$insurance_application->name}%")->first();

        if (!$chef) {
            $chef = Chef::create([
                'name' => $insurance_application->name,
                'phone' => $insurance_application->phone,
                'dob' => $insurance_application->dob,
                'address' => $insurance_application->address,
                'rank' => $insurance_application->rank,
                'feedback' => null,
                'resume' => null,
                'certificate' => null,
                'identification' => null,
                'group_id' => Group::first()->id,
            ]);
        }

        if ($request->hasFile('document')) {
            $file = $request->file('document');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/documents/', $filename);
            $document_path = '/uploads/documents/' . $filename;
        }

        Insurance::create([
            'insurance_type_id' => $insurance_application->insurance_type_id,
            'chef_id' => $chef->id,
            'policy_number' => $request->policy_number,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'status' => $request->status,
            'document' => $document_path ?? null,
            'remarks' => $request->remarks,
        ]);

        $text = ucwords(auth()->user()->name) . ' transformed Insurance Application: ' . $insurance_application->id . " to active Insurance, datetime: " . now();
        Log::create([
            'text' => $text,
        ]);

        return redirect()->route('insurances')->with('success', 'Insurance Application Transformed to active Insurance Successfully!');
    }
}
