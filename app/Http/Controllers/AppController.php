<?php

namespace App\Http\Controllers;

use App\Models\Chef;
use App\Models\Log;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        $chefs_count = Chef::count();
        $restaurants_count = Restaurant::count();
        $users_count = User::count();
        $logs_count = Log::count();

        $data = compact('chefs_count', 'restaurants_count', 'users_count', 'logs_count');
        return view('index', $data);
    }
}
