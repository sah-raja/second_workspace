<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;
use App\Models\Users;
use Illuminate\Routing\Route;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function credentials(Request $request)
    {
        //overriden form AuthenticatesUsers
        $field = filter_var($request->get($this->username()), FILTER_VALIDATE_EMAIL)
            ? $this->username()
            : 'username';

        return [
            $field => $request->get($this->username()),
            'password' => $request->password,
        ];
    }

    // public function showLoginForm()
    // {
    //     return view('auth.login');
    // }

    protected function loginRole(Request $request){
        $useremail = $request->email;
        $username = $request->username;
        $url = $request->url();
        $role = '';
        if(str_contains($url,'user')){
            $role = 'user';
        }elseif(str_contains($url,'employer')){
            $role = 'employer';
        }elseif(str_contains($url,'sikaruApanel')){
            $role = 'admin';
        }
        $checkUser = User::where(function ($query) use ($username, $useremail) {
            $query->where('username', '=', $username)
                  ->orWhere('email', '=', $useremail);
        })->where(function ($query) use ($role) {
            $query->where('role', '=', $role);
        })->first();
        if($checkUser){
            return $this->login($request); 
        }else{
            dd("not registered");
        }
    }
}
