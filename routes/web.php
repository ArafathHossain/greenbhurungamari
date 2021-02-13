<?php
Route::get('/', function () {return view('home');});
Route::get('/aboutus', function () {return view('aboutus');});
Route::get('/cader-list', function () {return view('caderlist');});
Route::get('/galary', function () {return view('galary');});
Route::get('/contact_us', function () {return view('contactus');});
Route::get('/donation', function () {return view('donation');});
Route::get('/cadre/{id}', 'CadresController@SingleDetails');
Route::get('/union/{id}', 'CadresController@unioncaders');
Route::get('pages/upazila/{id}', 'PagesController@Pages2Details');
Route::get('/page_details/{id}', 'PagesController@PagesDetails');
//auth & user
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/password-change', 'HomeController@changePassword')->name('password.change');
// Route::post('/password-update', 'HomeController@updatePassword')->name('password.update');
// Route::get('/user/logout', 'HomeController@Logout')->name('user.logout');

//admin=======
Route::get('admin/home', 'AdminController@index');
Route::get('admin', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin', 'Admin\LoginController@login');
        // Password Reset Routes...
Route::get('admin/password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin/reset/password/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::post('admin/update/reset', 'Admin\ResetPasswordController@reset')->name('admin.reset.update');
Route::get('/admin/Change/Password','AdminController@ChangePassword')->name('admin.password.change');
Route::post('/admin/password/update','AdminController@Update_pass')->name('admin.password.update'); 
Route::get('admin/logout', 'AdminController@logout')->name('admin.logout');
//area routes

Route::prefix('admin/union/')->group(function(){ 
	Route::get('/all', 'Admin\UnionController@index')->name('union');
	Route::get('/create', 'Admin\UnionController@create')->name('create.union');
	Route::post('/store', 'Admin\UnionController@storeunion')->name('store.union');
	Route::get('/delete/{id}', 'Admin\UnionController@Deleteunion');
	Route::get('/edit/{id}', 'Admin\UnionController@Editunion');
	Route::post('/update/{id}', 'Admin\UnionController@Updateunion');
});

Route::prefix('admin/pages/')->group(function(){ 
	Route::get('/all', 'Admin\pages\PagesController@index')->name('pages.all');
	Route::get('/create', 'Admin\pages\PagesController@create')->name('pages.create');
	Route::post('/store', 'Admin\pages\PagesController@store')->name('store.pages');
	Route::get('/delete/{id}', 'Admin\pages\PagesController@Delete');
	Route::get('/edit/{id}', 'Admin\pages\PagesController@Edit');
	Route::post('/update/{id}', 'Admin\pages\PagesController@Update');
});

Route::prefix('admin/pages2/')->group(function(){ 
	Route::get('/all', 'Admin\Pages2\PagesController@index')->name('pages2.all');
	Route::get('/create', 'Admin\Pages2\PagesController@create')->name('pages2.create');
	Route::post('/store', 'Admin\Pages2\PagesController@store')->name('store.pages2');
	Route::get('/delete/{id}', 'Admin\Pages2\PagesController@Delete');
	Route::get('/edit/{id}', 'Admin\Pages2\PagesController@Edit');
	Route::post('/update/{id}', 'Admin\Pages2\PagesController@Update');
});



Route::prefix('admin/galary/')->group(function(){ 
	Route::get('/all', 'Admin\galary\GalaryController@index')->name('image.all');
	Route::get('/create', 'Admin\galary\GalaryController@create')->name('image.create');
	Route::post('/store', 'Admin\galary\GalaryController@store')->name('store.image');
	Route::get('/delete/{id}', 'Admin\galary\GalaryController@Delete');
	Route::get('/edit/{id}', 'Admin\galary\GalaryController@Edit');
	Route::post('/update/{id}', 'Admin\galary\GalaryController@Update');
});

Route::prefix('admin/cadre')->group(function(){
	Route::get('/all', 'Admin\Client\ClientController@index')->name('clients');
	Route::get('/create', 'Admin\Client\ClientController@create')->name('create.clients');
	Route::post('/store', 'Admin\Client\ClientController@store')->name('store.clients');
	Route::get('/delete/{id}', 'Admin\Client\ClientController@Delete');
	Route::get('/edit/{id}', 'Admin\Client\ClientController@Edit');
	Route::post('/update/{id}', 'Admin\Client\ClientController@Update');
	Route::get('/massages', 'Admin\Client\ClientController@messages')->name('all.mssages');
});
Route::prefix('admin/site')->group(function(){
	Route::get('/settings', 'Admin\SiteSettingsController@Edit')->name('site.settings');
	Route::post('/store', 'Admin\SiteSettingsController@update')->name('update.settings');
});

Route::prefix('admin/contactus/')->group(function(){ 
	Route::get('/edit', 'Admin\ContactusController@Edit');
	Route::post('/update', 'Admin\ContactusController@Update');
});

Route::prefix('admin/donation/')->group(function(){
	Route::get('/edit', 'Admin\DonationController@Edit');
	Route::post('/update', 'Admin\DonationController@Update');
});



Route::prefix('admin/subadmin')->group(function(){
	Route::get('/all', 'Admin\roles\RoleController@index')->name('all.admins');
	Route::get('/create', 'Admin\roles\RoleController@create')->name('add.admin');
	Route::post('/store', 'Admin\roles\RoleController@store')->name('store.admin');
	Route::post('/update', 'Admin\roles\RoleController@update')->name('update.admin');
	Route::get('/edit/{id}', 'Admin\roles\RoleController@edit')->name('admin.edit','$id');
});

//front-end for user
Route::get('/profile', 'HomeController@profile')->name('profile');
Route::post('/massage', 'MessageController@storeMassage')->name('massage');

 