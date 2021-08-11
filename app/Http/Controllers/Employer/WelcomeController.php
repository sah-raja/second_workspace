<?php

namespace App\Http\Controllers\Employer;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Auth;

class WelcomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('access-control:employer');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        dd('employer dashboard');
    }
}
