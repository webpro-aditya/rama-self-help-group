<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Home
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('frontend.home');
    }

    public function management()
    {
        return view('frontend.management');
    }

    public function events()
    {
        return view('frontend.events');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    /**
     * Login 
     * 
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        if (Auth::guard()->check()) {
            return redirect()->route('dashboard.index');
        }
        return view('admin.login');
    }

    public function register()
    {
        return view('admin.register');
    }

    public function thanks()
    {
        return view('frontend.thanks');
    }
}
