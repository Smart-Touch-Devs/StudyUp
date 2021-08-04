<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\LanguagesController;
use App\Http\Controllers\ContactsController;
use Illuminate\Support\Facades\Auth;


Route::get('/admin', 'DashboardController@dashboard')->name('admin')/*->middleware("auth")*/;
Route::get('/master', 'DashboardController@master')->name('master');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('language','LanguagesController'); 
Route::resource('countrie','CountriesController'); 
Route::resource('Faqs','FaqsController');
require(__DIR__.'../../app/Http/Controllers/Auth/auth.php');
=======
Auth::routes(['verify' => true]);
Route::get('/admin', 'DashboardController@dashboard')->name('dashboard')->middleware("auth");
Route::get('/home', 'HomeController@index')->name('home');
require(__DIR__.'../../app/Http/Controllers/Auth/auth.php');


// CRUDs admin
Route::resource('categories','CategoriesController');
Route::resource('authors','AuthorsController');
Route::resource('editors','EditorsController');
Route::resource('articles','ArticlesController');

//Routes home
Route::get('/', function() {
    return view('home.welcome');
});
Route::get('/contacts', [ContactsController::class, 'index']);
Route::get('/contacts', [ContactsController::class, 'index']);

//Routes articles/blog
Route::resource('blog','BlogController');
