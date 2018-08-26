<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**
 * The Login/Logout route section
 */
Route::get('/', 'LoginController@index')->name('view_login');
Route::post('/login', 'LoginController@login')->name('post_login');
Route::get('/logout', 'LoginController@logout')->name('do_logout');

/**
 * Route group for students.
 * All the routes are prefixed with a "/student" url
 * The CheckStudentAuth middleware checks if the user accessing this is really a student.
 */
Route::middleware('student.auth')->name('student.')->prefix('student')->group(function(){

    /*
     * The base url "site/student", will return the dashboard view
     */
    Route::view('/', 'student.dashboard')->name('dashboard');

    // In case someone access student/dashboard, no 404
    Route::redirect('dashboard', '/')->name('dashboard_r');

    /*
     * Return the academic view
     */
    Route::view('academic-details', 'student.academics')->name('academics');

    /*
     * Return the timetable view
     */
    Route::view('timetable', 'student.timetable')->name('timetable');

    /*
     * Return the numbers view
     */
    Route::view('faculty-details', 'student.phone')->name('numbers');

    /*
     * Return the financial view
     */
    Route::view('financial-details', 'student.financials')->name('financials');

    /*
     * Return the profile settings view
     */
    Route::view('myaccount', 'student.profile')->name('profile');
});