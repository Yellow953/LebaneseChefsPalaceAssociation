<?php

namespace App\Http\Controllers;

use App\Exports\RestaurantsExport;
use App\Models\Log;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class RestaurantController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $restaurants = Restaurant::select('id', 'name', 'location', 'type', 'certification_status')->filter()->orderBy('id', 'desc')->paginate(25);

        return view('restaurants.index', compact('restaurants'));
    }

    public function new()
    {
        return view('restaurants.new');
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'location' => 'required|max:255',
            'type' => 'required',
            'certification_status' => 'required',
        ]);

        Restaurant::create($request->all());

        $text = ucwords(auth()->user()->name) . " created Restaurant : " . $request->name . ", datetime :   " . now();
        Log::create([
            'text' => $text,
        ]);

        return redirect()->route('restaurants')->with('success', 'Restaurant created successfully!');
    }

    public function edit(Restaurant $restaurant)
    {
        return view('restaurants.edit', compact('restaurant'));
    }

    public function update(Restaurant $restaurant, Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'location' => 'required|max:255',
            'type' => 'required',
            'certification_status' => 'required',
        ]);

        $restaurant->update($request->all());

        if ($restaurant->name != trim($request->name)) {
            $text = ucwords(auth()->user()->name) . ' updated Restaurant ' . $restaurant->name . " to " . $request->name . ", datetime :   " . now();
        } else {
            $text = ucwords(auth()->user()->name) . ' updated Restaurant ' . $restaurant->name . ", datetime :   " . now();
        }

        Log::create([
            'text' => $text,
        ]);

        return redirect()->route('restaurants')->with('success', 'Restaurant updated successfully!');
    }

    public function destroy(Restaurant $restaurant)
    {
        if ($restaurant->can_delete()) {
            $text = ucwords(auth()->user()->name) . " deleted Restaurant : " . $restaurant->name . ", datetime :   " . now();

            Log::create([
                'text' => $text,
            ]);
            $restaurant->delete();

            return redirect()->back()->with('error', 'Restaurant deleted successfully!');
        } else {
            return redirect()->back()->with('error', 'Unothorized Access...');
        }
    }

    public function export()
    {
        return Excel::download(new RestaurantsExport, 'restaurants.xlsx');
    }
}
