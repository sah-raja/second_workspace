<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('access-control:admin|user|employer');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        switch (Auth::user()->role) {
            case 'admin':
                return redirect()->route('admin.welcome');
            case 'employer':
                return redirect()->route('employer.welcome');
            case 'user':
                return redirect()->route('user.welcome');
            default:
                abort(401);
        }
    }
}
