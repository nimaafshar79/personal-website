<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\RegistrationRequest;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    public function login(Request $request)
    {
        $this->validate($request, [
            "username" => "required",
            "password" => "required"
        ]);
        $data = [
            "username" => $request->username,
            "password" => $request->password,
            "remember" => $request->has("remember")
        ];
        if ($this->attemptLogin($data)) {
            return redirect("/");
        } else {
            return redirect()->back()->withErrors(["login" => "نام کاربری یا رمز عبور اشتباه است"])
                ->withInput($request->only("username", "remember"));
        }

    }

    public function attemptLogin(array $data)
    {
        return Auth::attempt(['username' => $data["username"], 'password' => $data["password"]], true);
    }

    public function showLoginForm(Request $request)
    {
        return view('auth.login');
    }

    public function register(RegistrationRequest $request)
    {
        $user = $this->create([
            "name" => $request->name,
            "username" => $request->username,
            "password" => $request->password
        ]);

        Auth::login($user);
        return redirect($this->redirectTo);
    }

    public function showRegistrationForm(Request $request)
    {
        return view('auth.register');
    }

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect($this->redirectTo);
    }
}