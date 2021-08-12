<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\LanguagesController;
use App\Http\Controllers\ContactsController;
use Illuminate\Support\Facades\Auth;



Route::get('/master', 'DashboardController@master')->name('master');
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes(['verify' => true]);
Route::get('/admin', 'DashboardController@dashboard')->name('dashboard')->middleware("auth");

Route::get('/deconnexion','HomeController@deconnexion');
require(__DIR__.'../../app/Http/Controllers/Auth/auth.php');


// CRUDs admin
Route::resource('categories','CategoriesController')->middleware("auth");
Route::resource('authors','AuthorsController')->middleware("auth");
Route::resource('editors','EditorsController')->middleware("auth");
Route::resource('articles','ArticlesController')->middleware("auth");
Route::resource('language','LanguagesController')->middleware("auth"); 
Route::resource('countrie','CountriesController')->middleware("auth"); 
Route::resource('Faqs','FaqsController')->middleware("auth");

 
Route::resource('/','HomesController');
Route::get('/contacts', [ContactsController::class, 'index']);

//Routes articles/blog
Route::resource('blog','BlogController');
//Routes a propos
Route::get('a_propos','AproposController@vue');
//Routes books
Route::resource('books','BooksController');
//Routes Notifications
Route::resource('notifications','NotificationsController');