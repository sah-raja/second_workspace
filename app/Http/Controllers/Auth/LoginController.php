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

    protected function loginRole(Request $request){
        $username = $request->email;
        $url = $request->url();
        $role = '';
        if(str_contains($url,'user')){
            $role = 'user';
        }elseif(str_contains($url,'employer')){
            $role = 'employer';
        }elseif(str_contains($url,'seeker')){
            $role = 'seeker';
        }
        $checkUser = User::where(function ($query) use ($username) {
            $query->where('username', '=', $username)
                  ->orWhere('email', '=', $username);
        })->where(function ($query) use ($role) {
            $query->where('role', '=', $role);
        })->pluck('username');
        if($checkUser){
            if($this->login($request)){
                return redirect()->route($role.'.welcome');
            }  
        }
    }
}
