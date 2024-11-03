<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Models\Log;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    public function index()
    {
        $users = User::select('id', 'name', 'email', 'role', 'phone')->filter()->orderBy('id', 'desc')->paginate(25);

        return view('users.index', compact('users'));
    }

    public function new()
    {;
        return view('users.new');
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'phone' => 'required',
            'role' => 'required',
            'password' => 'required|max:255|confirmed',
        ]);

        User::create([
            'name' => trim($request->name),
            'email' => trim($request->email),
            'phone' => $request->phone,
            'role' => $request->role,
            'password' => Hash::make($request->password),
        ]);

        $text = ucwords(auth()->user()->name) . " created User : " . $request->name . ", datetime :   " . now();
        Log::create([
            'text' => $text,
        ]);

        return redirect()->route('users')->with('success', 'User created successfully!');
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(User $user, Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required',
            'role' => 'required',
        ]);

        $user->update([
            'name' => trim($request->name),
            'email' => trim($request->email),
            'phone' => $request->phone,
            'role' => $request->role,
        ]);

        if ($user->name != trim($request->name)) {
            $text = ucwords(auth()->user()->name) . ' updated User ' . $user->name . " to " . $request->name . ", datetime :   " . now();
        } else {
            $text = ucwords(auth()->user()->name) . ' updated User ' . $user->name . ", datetime :   " . now();
        }

        Log::create([
            'text' => $text,
        ]);

        return redirect()->route('users')->with('success', 'User created successfully!');
    }

    public function destroy(User $user)
    {
        if ($user->can_delete()) {
            $text = ucwords(auth()->user()->name) . " deleted user : " . $user->name . ", datetime :   " . now();

            Log::create([
                'text' => $text,
            ]);
            $user->delete();

            return redirect()->back()->with('error', 'User deleted successfully!');
        } else {
            return redirect()->back()->with('error', 'Unothorized Access...');
        }
    }

    public function export()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
}
