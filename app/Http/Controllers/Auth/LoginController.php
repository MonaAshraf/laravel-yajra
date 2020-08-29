<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use App\User;
use Hash;
use Str;
use Illuminate\Support\Facades\Auth;
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


    public function github()
    {
        return Socialite::driver('github')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function githubRedirect()
    {
        $user = Socialite::driver('github')->stateless()->user();

        // $user->token;
        $user=User::firstOrCreate(['name'=> $user->getName()],
        ['email'=> $user->getEmail(),
      'password'=>Hash::make(Str::random(24))]);

$name= $user->name;

Auth::login($user, true);
//return redirect()->intended(RouteServiceProvider::HOME);
//return redirect()->route('register',true);
 return redirect('home');
     //return view('home',compact('name'));
//return back('register')->withInput();


}




}
