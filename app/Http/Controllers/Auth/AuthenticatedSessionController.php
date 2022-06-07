<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Str;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function github(){
        // send user's request to github
       return Socialite::driver('github')->redirect();
    }

    public function githubRedirect(){
        // get oauth request back from github to authenticate user
        $user=Socialite::driver('github')->user();

        //if user doesn't exist, add them
        //if they do get the model
        //either way authenticate to the app

        dd($user);

        // $user=User::firstOrCreate([
        //     'email'=>$user->email
        // ],[
        //     'name'=>$user->name,
        //     'password'=>Hash::make(Str::random(24))
        // ]);

        // Auth::login($user,true);
        // return redirect('/admin');
    }
}
