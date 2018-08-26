<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

// Models to be used
use \App\Students as Student;
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
     *
     * @param \Illuminate\Http\Request $request
     * @return void
     */
    public function login(Request $request){

        // Store user credentials from the request in a var (excluding the CSRF token)
        $userCredentials = $request->except('_token', 'remember');

        // First, attempt to make a student auth. If successful, redirect to dashboard
        if (Auth::guard('students')->attempt($userCredentials)){
            // Means that the user trying to log in is a student
            return redirect()->intended(route('student.dashboard'));
        }
        else {
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
