<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'username' => 'required|string|max:191|unique:users',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => $data['role'],
        ]);
    }

    protected function registerRole(Request $request){
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
            //send message of already registered 
            dd("already registered");
        }else{
            $request->request->add(['role' => $role]);
            return $this->register($request); 
        }
    }
}
