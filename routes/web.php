<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function() {
    Route::resource('/users', 'UsersController', ['except' => ['show', 'create', 'store']]);
    Route::resource('/courses','CoursesController');
    Route::resource('/blog','BlogController');
});

Route::get('/contacts', 'ContactController@index')->name('contacts.index');
Route::post('/contacts', 'ContactController@store')->name('contacts.store');
Route::get('/contacts/{slug}/show', 'ContactController@show')->name('contact.show');
Route::post('/contacts/{slug}/delete', 'ContactController@destroy')->name('contact.delete');

Route::get('/newsletter', 'Admin\NewsletterController@index')->name('ns.index');
Route::post('/newsletter', 'Admin\NewsletterController@store')->name('ns.store');
Route::post('/newsletter/{id}/delete', 'Admin\NewsletterController@delete')->name('ns.delete');
