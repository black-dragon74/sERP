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
 * The CheckStudentAuth middleware checks if the user is really a student
 */
Route::middleware('student.auth')->name('student.')->prefix('student')->group(function(){

    /*
     * The base url "site/student", will return the dashboard view
     */
    Route::get('/', function (){
       return view('student.dashboard');
    })->name('dashboard');
});