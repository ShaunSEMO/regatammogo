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

Route::resource('/blog', 'BlogController');

Route::get('/shop', 'ShopController@index');

Route::resource('/gallery', 'GalleryController');


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

    //BLOG
Route::get('/t@k3m3t0@dm!n/blog/create', 'DashboardController@createPost')->name('createPost');
Route::post('/t@k3m3t0@dm!n/blog', 'DashboardController@storePost')->name('storePost');
Route::get('/t@k3m3t0@dm!n/blog/{blog}/edit', 'DashboardController@edit')->name('updatePost');
Route::put('/t@k3m3t0@dm!n/blog/{blog}', 'DashboardController@updatePost')->name('updatePost');
Route::delete('/t@k3m3t0@dm!n/blog/{blog}', 'DashboardController@destroyPost')->name('deletePost');

    //GALLERY
Route::get('/t@k3m3t0@dm!n/gallery/create', 'DashboardController@createpicture')->name('createPicture');
Route::post('/t@k3m3t0@dm!n', 'DashboardController@storePicture')->name('storePicture');
Route::delete('/t@k3m3t0@dm!n/gallery/{gallery}', 'DashboardController@destroyPicture')->name('deletePicture');

    // ABOUT
Route::get('/t@k3m3t0@dm!n/about/{about}/edit', 'DashboardController@editAbout')->name('editAbout');
Route::put('/t@k3m3t0@dm!n/about/{about}', 'DashboardController@updateAbout')->name('updatePost');

    // SHOP
Route::get('/shop/{shop}', 'ShopController@show');
Route::get('/t@k3m3t0@dm!n/shop/addItem', 'DashboardController@addItem')->name('addItem');
Route::post('/t@k3m3t0@dm!n/shop', 'DashboardController@storeItem')->name('storeItem');
Route::get('/t@k3m3t0@dm!n/shop/{shop}/edit', 'DashboardController@editItem')->name('editItem');
Route::put('/t@k3m3t0@dm!n/shop/{shop}', 'DashboardController@updateItem')->name('updateItem');
Route::delete('/t@k3m3t0@dm!n/shop/{shop}', 'DashboardController@deleteItem')->name('deleteItem');