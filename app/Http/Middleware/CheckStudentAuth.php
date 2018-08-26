<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckStudentAuth
{
    /**
     * This middleware will intercept all the incoming student requests.
     * This asserts that the user accessing student area is really a student.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        /**
         * We have a custom guard defined for students. We'll use that to do the verification
         */
        if (!Auth::guard('students')->check()){
            // First we will get the current URL path from the request
            $currentURL = $request->path();

            // Now we will form the URL with redirect appended as a query string
            $redirectURL = route('view_login').'?redirect='.$currentURL;

            // Time to send the user away
            return redirect($redirectURL)->with('error', 'You must login first');
        }

        return $next($request);
    }
}
