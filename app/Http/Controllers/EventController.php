<?php

namespace App\Http\Controllers;

use App\Exports\EventsExport;
use App\Models\Event;
use App\Models\Log;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->only(['destroy']);
    }

    public function index()
    {
        $events = Event::with('user')->select('id', 'name', 'description', 'user_id', 'start_date', 'end_date', 'location', 'status')->filter()->orderBy('id', 'desc')->paginate(25);
        $users = User::select('id', 'name')->get();

        $data = compact('events', 'users');
        return view('events.index', $data);
    }

    public function new()
    {
        return view('events.new');
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:events|max:255',
            'start_date' => 'required|date',
            'location' => 'required|string|max:255',
            'status' => 'required|string|max:255',
        ]);

        Event::create([
            'name' => $request->name,
            'description' => $request->description,
            'user_id' => auth()->user()->id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'location' => $request->location,
            'status' => $request->status,
        ]);

        $text = ucwords(auth()->user()->name) . " created Event: " . $request->name . ", datetime: " . now();
        Log::create([
            'text' => $text,
        ]);

        return redirect()->route('events')->with('success', 'Event created successfully!');
    }

    public function edit(Event $event)
    {
        return view('events.edit', compact('event'));
    }

    public function update(Event $event, Request $request)
    {
        $request->validate([
            'name' => 'required|unique:events|max:255',
            'start_date' => 'required|date',
            'location' => 'required|string|max:255',
            'status' => 'required|string|max:255',
        ]);

        $event->update([
            'name' => $request->name,
            'description' => $request->description,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'location' => $request->location,
            'status' => $request->status,
        ]);

        $text = ucwords(auth()->user()->name) . " updated Event: " . $event->name . ", datetime: " . now();
        Log::create([
            'text' => $text,
        ]);

        return redirect()->route('events')->with('success', 'Event updated successfully!');
    }

    public function destroy(Event $event)
    {
        $text = ucwords(auth()->user()->name) . " deleted Event: " . $event->name . ", datetime: " . now();

        Log::create([
            'text' => $text,
        ]);
        $event->delete();

        return redirect()->back()->with('success', 'Event deleted successfully!');
    }

    public function export()
    {
        return Excel::download(new EventsExport, 'events.xlsx');
    }
}
