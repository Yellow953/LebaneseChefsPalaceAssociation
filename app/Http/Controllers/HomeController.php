<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.welcome');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function institutes()
    {
        return view('frontend.institutes.institutes');
    }

    public function ghi()
    {
        return view('frontend.institutes.ghi');
    }
    public function ghc()
    {
        return view('frontend.institutes.ghc');
    }

    public function ghe()
    {
        return view('frontend.institutes.ghe');
    }

    public function golden_book()
    {
        return view('frontend.institutes.golden-book');
    }

    public function staycare()
    {
        return view('frontend.institutes.staycare');
    }

    public function costpitality()
    {
        return view('frontend.institutes.costpitality');
    }

    public function apply_for_insurance()
    {
        return view('insurance_applications.apply');
    }
    public function custom_logout()
    {
        Session::flush();
        Auth::logout();

        return redirect('login');
    }
}
