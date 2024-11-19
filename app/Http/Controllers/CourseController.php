<?php

namespace App\Http\Controllers;

use App\Exports\CoursesExport;
use App\Models\Course;
use App\Models\Log;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->only(['destroy']);
    }

    public function index()
    {
        $courses = Course::select('id', 'title', 'description', 'taught_by', 'duration', 'level', 'fee', 'location', 'status')->filter()->orderBy('id', 'desc')->paginate(25);

        $data = compact('courses');
        return view('courses.index', $data);
    }

    public function new()
    {
        return view('courses.new');
    }

    public function create(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:courses|max:255',
            'taught_by' => 'required|string|max:255',
            'duration' => 'required|string|max:255',
            'level' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'fee' => 'required|numeric|min:0',
        ]);

        Course::create([
            'title' => $request->title,
            'description' => $request->description,
            'taught_by' => $request->taught_by,
            'duration' => $request->duration,
            'level' => $request->level,
            'location' => $request->location,
            'status' => $request->status,
            'fee' => $request->fee,
        ]);

        $text = ucwords(auth()->user()->name) . " created Course: " . $request->name . ", datetime: " . now();
        Log::create([
            'text' => $text,
        ]);

        return redirect()->route('courses')->with('success', 'Course created successfully!');
    }

    public function edit(Course $course)
    {
        return view('courses.edit', compact('course'));
    }

    public function update(Course $course, Request $request)
    {
        $request->validate([
            'title' => 'required|unique:courses|max:255',
            'taught_by' => 'required|string|max:255',
            'duration' => 'required|string|max:255',
            'level' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'fee' => 'required|numeric|min:0',
        ]);

        $course->update([
            'title' => $request->title,
            'description' => $request->description,
            'taught_by' => $request->taught_by,
            'duration' => $request->duration,
            'level' => $request->level,
            'location' => $request->location,
            'status' => $request->status,
            'fee' => $request->fee,
        ]);

        $text = ucwords(auth()->user()->name) . " updated Course: " . $course->name . ", datetime: " . now();
        Log::create([
            'text' => $text,
        ]);

        return redirect()->route('courses')->with('success', 'Course updated successfully!');
    }

    public function destroy(Course $course)
    {
        $text = ucwords(auth()->user()->name) . " deleted Course: " . $course->name . ", datetime: " . now();

        Log::create([
            'text' => $text,
        ]);
        $course->delete();

        return redirect()->back()->with('success', 'Course deleted successfully!');
    }

    public function export()
    {
        return Excel::download(new CoursesExport, 'courses.xlsx');
    }
}
