<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /**
     * Index function that loads up the login page into the viewport.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        // If the user is already logged in, he/she should be redirected to dashboard stead of login page.
        if (Auth::guard('students')->check()){
            return redirect()->route('student.dashboard');
        }
        else {
            return view('login');
        }
    }

    /**
     * Checks for the login and redirects to appropriate user-type landing page.
     * If a redirect query string is attached to the URL the system will redirect to that page
     *
     * @param \Illuminate\Http\Request $request
     * @return void
     */
    public function login(Request $request){

        // Hmm... So you wanna see that famous dashboard? Well well!
        // I just need your username and password to take you there.
        $userCredentials = $request->only('username', 'password');

        // Umm... U a student? Let's find out.
        if (Auth::guard('students')->attempt($userCredentials)){
            // Yayy!! Access granted. Lemme take you place(s).
            // If you already made the choice we'll go there else I'll take you to the shiny dashboard.
            $redirectURL = $request->has('redirect') ? env('APP_URL').'/'.$request->redirect : route('student.dashboard');

            // Houston, we have a lift off!
            return redirect()->intended($redirectURL);
        }
        else {
            // The login attempt that you made has failed, back to login baby!
            return redirect(route('view_login'))->with('error', 'Login Failed!');
        }

    }

    /**
     * Destroys the session and logs the user out
     *
     * @return mixed
     */
    public function logout(){
        // If and only if the user is logged in, attempt logout
        if (Auth::guard('students')->check()){
            Session::flush();
            Auth::logout();
            return redirect()->route('view_login')->with('success', 'Logged out successfully!');
        }
        else {
            return redirect()->route('view_login')->with('error', 'Invalid attempt');
        }
    }
}
