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

Route::get('/', 'IndexController@index');
Route::get('/about', 'AboutController@index');
Route::get('/upcomingevents', 'UpcomingEventsController@index');
Route::get('/programs', 'ProgramsController@index');

// Authentication Routes...
Route::get('spyderwebs_login_@dm!n', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('spyderwebs_login_@dm!n', 'Auth\LoginController@login');
Route::post('spyderwebs_logout_@dm!n', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('spyderwebs_register_@dm!n', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('spyderwebs_register_@dm!n', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('@dm!n_p@ssw0rd/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('@dm!n_p@ssw0rd/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('@dm!n_p@ssw0rd/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('@dm!n_p@ssw0rd/reset', 'Auth\ResetPasswordController@reset');

//Dashboard Routes
Route::get('/t@k3m3t0@dm!n', 'DashboardController@index')->name('dashboard');

//Content Management Routes

    // ABOUT
Route::get('/t@k3m3t0@dm!n/about/{about}/edit', 'DashboardController@editAbout')->name('editAbout');
Route::put('/t@k3m3t0@dm!n/about/{about}', 'DashboardController@updateAbout')->name('updatePost');

    //UPCOMING EVENTS
Route::get('/t@k3m3t0@dm!n/upcomingevents/create', 'DashboardController@createEvent')->name('createEvent');
Route::post('/t@k3m3t0@dm!n/upcomingevents', 'DashboardController@storeEvent')->name('storeEvent');
Route::get('/t@k3m3t0@dm!n/upcomingevents/{upcomingevents}/edit', 'DashboardController@editEvent')->name('updateEvent');
Route::put('/t@k3m3t0@dm!n/upcomingevents/{upcomingevents}', 'DashboardController@updateEvent')->name('updateEvent');
Route::delete('/t@k3m3t0@dm!n/upcomingevents/{upcomingevents}', 'DashboardController@destroyEvent')->name('deleteEvent');

    //PROGRAMS OFFERED
Route::get('/t@k3m3t0@dm!n/programs/create', 'DashboardController@createProgram')->name('createProgram');
Route::post('/t@k3m3t0@dm!n/programs', 'DashboardController@storeProgram')->name('storeProgram');
Route::get('/t@k3m3t0@dm!n/programs/{programs}/edit', 'DashboardController@editProgram')->name('updateProgram');
Route::put('/t@k3m3t0@dm!n/programs/{programs}', 'DashboardController@updateProgram')->name('updateProgram');
Route::delete('/t@k3m3t0@dm!n/programs/{programs}', 'DashboardController@destroyProgram')->name('deleteProgram');


    //BLOG
// Route::get('/t@k3m3t0@dm!n/blog/create', 'DashboardController@createPost')->name('createPost');
// Route::post('/t@k3m3t0@dm!n/blog', 'DashboardController@storePost')->name('storePost');
// Route::get('/t@k3m3t0@dm!n/blog/{blog}/edit', 'DashboardController@edit')->name('updatePost');
// Route::put('/t@k3m3t0@dm!n/blog/{blog}', 'DashboardController@updatePost')->name('updatePost');
// Route::delete('/t@k3m3t0@dm!n/blog/{blog}', 'DashboardController@destroyPost')->name('deletePost');

