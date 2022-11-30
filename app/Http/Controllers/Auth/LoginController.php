<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    public function loginForm()
    {
        return view('auth.login');
    }
    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'email'=> 'required|max:255|email',
            'password'=> 'required',
        ],[
            'email.required' => 'the email is required ',
            'password.required' => 'the password is required',
        ]);
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect()->route('dashboard');
        }else{
            if(User::where('email', $request->email)->exists()){

                return back()->withErrors([
                    'password' => 'The password is wrong ',
                  ]);
            }else{
                return back()->withErrors([
                    'email' => 'The email does not exists ',
                  ]);
            }
        }
    }
}
