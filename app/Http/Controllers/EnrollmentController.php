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
            'chef_id' => $request->chef_id,
            'status' => $request->status,
            'enrolled_at' => $request->enrolled_at,
            'completed_at' => $request->completed_at,
        ]);

        $text = ucwords(auth()->user()->name) . " created Enrollment for Chef: " . $enrollment->chef->name . " in Course: " . $enrollment->course->title . ", datetime :   " . now();
        Log::create([
            'text' => $text,
        ]);

        return redirect()->route('enrollments')->with('success', 'Enrollment Created successfully!');
    }

    public function edit(CourseEnrollment $course_enrollment)
    {
        $data = compact('course_enrollment');
        return view('enrollments.edit', $data);
    }

    public function update(Request $request, CourseEnrollment $course_enrollment)
    {
        $request->validate([
            'enrolled_at' => 'required|date',
            'status' => 'required|string',
        ]);

        $course_enrollment->update([
            'status' => $request->status,
            'enrolled_at' => $request->enrolled_at,
            'completed_at' => $request->completed_at,
        ]);

        $text = ucwords(auth()->user()->name) . ' updated Enrollment: ' . $course_enrollment->id . ", datetime :   " . now();

        Log::create([
            'text' => $text,
        ]);

        return redirect()->route('enrollments')->with('success', 'Enrollment Updated Successfully!');
    }

    public function destroy(CourseEnrollment $course_enrollment)
    {
        if ($course_enrollment->can_delete()) {
            $text = ucwords(auth()->user()->name) . " deleted Enrollment : " . $course_enrollment->id . ", datetime :   " . now();

            Log::create([
                'text' => $text,
            ]);
            $course_enrollment->delete();

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
