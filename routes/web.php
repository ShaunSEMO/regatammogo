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

Route::get('/about', function () {
    return View::make('home.about');
});

Route::resource('blog', 'BlogController');

Route::resource('gallery', 'GalleryController');

// Authentication Routes...
Route::get('spyderwebs_login_@dm!n', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('spyderwebs_login_@dm!n', 'Auth\LoginController@login');
Route::post('spyderwebs_logout_@dm!n', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
// Route::get('spyderwebs_register_@dm!n', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('spyderwebs_register_@dm!n', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('@dm!n_p@ssw0rd/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('@dm!n_p@ssw0rd/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('@dm!n_p@ssw0rd/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('@dm!n_p@ssw0rd/reset', 'Auth\ResetPasswordController@reset');

//Dashboard Routes
Route::get('/t@k3m3t0@dm!n', 'DashboardController@index')->name('dashboard');

//Content Management Routes
Route::get('/t@k3m3t0@dm!n/blog/create', 'DashboardController@createPost')->name('createPost');
Route::post('/t@k3m3t0@dm!n', 'DashboardController@storepost')->name('storePost');

Route::get('/t@k3m3t0@dm!n/blog/{blog}/edit', 'DashboardController@edit')->name('updatePost');
Route::put('/t@k3m3t0@dm!n/blog/{blog}', 'DashboardController@updatePost')->name('updatePost');

Route::delete('/t@k3m3t0@dm!n/blog/{blog}', 'DashboardController@destroyPost')->name('deletePost');