<?php

namespace App\Http\Controllers;

use App\Exports\EnrollmentsExport;
use App\Models\Chef;
use App\Models\Course;
use App\Models\CourseEnrollment;
use App\Models\Log;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class EnrollmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->only(['destroy']);
    }

    public function index()
    {
        $enrollments = CourseEnrollment::with('course', 'chef')->select('id', 'course_id', 'chef_id', 'status', 'enrolled_at', 'completed_at')->filter()->orderBy('id', 'desc')->paginate(25);
        $chefs = Chef::select('id', 'name')->get();
        $courses = Course::select('id', 'title')->get();

        $data = compact('enrollments', 'chefs', 'courses');
        return view('enrollments.index', $data);
    }

    public function new()
    {
        $chefs = Chef::select('id', 'name')->get();
        $courses = Course::select('id', 'title')->get();

        $data = compact('chefs', 'courses');
        return view('enrollments.new', $data);
    }

    public function create(Request $request)
    {
        $request->validate([
            'course_id' => 'required',
            'chef_id' => 'required',
            'enrolled_at' => 'required|date',
            'status' => 'required|string',
        ]);

        $enrollment = CourseEnrollment::create([
            'course_id' => $request->course_id,
            'user_id' => $request->user_id,
            'status' => $request->status,
            'enrolled_at' => $request->enrolled_at,
            'finished_at' => $request->finished_at,
        ]);

        $text = ucwords(auth()->user()->name) . " created Enrollemnet for Chef: " . $enrollment->chef->name . " in Course: " . $enrollment->course->title . ", datetime :   " . now();
        Log::create([
            'text' => $text,
        ]);

        return redirect()->route('chefs')->with('success', 'Enrollemnet Created successfully!');
    }

    public function edit(CourseEnrollment $enrollment)
    {
        $data = compact('enrollment');
        return view('enrollments.edit', $data);
    }

    public function update(CourseEnrollment $enrollment, Request $request)
    {
        $request->validate([
            'enrolled_at' => 'required|date',
            'status' => 'required|string',
        ]);

        $enrollment->update([
            'status' => $request->status,
            'enrolled_at' => $request->enrolled_at,
            'finished_at' => $request->finished_at,
        ]);

        $text = ucwords(auth()->user()->name) . ' updated Enrollment: ' . $enrollment->id . ", datetime :   " . now();

        Log::create([
            'text' => $text,
        ]);

        return redirect()->route('chefs')->with('success', 'Enrollment Updated Successfully!');
    }

    public function destroy(CourseEnrollment $enrollment)
    {
        if ($enrollment->can_delete()) {
            $text = ucwords(auth()->user()->name) . " deleted Enrollment : " . $enrollment->id . ", datetime :   " . now();

            Log::create([
                'text' => $text,
            ]);
            $enrollment->delete();

            return redirect()->back()->with('error', 'Enrollment Deleted Successfully!');
        } else {
            return redirect()->back()->with('error', 'Unothorized Access...');
        }
    }

    public function export()
    {
        return Excel::download(new EnrollmentsExport, 'enrollments.xlsx');
    }
}
