<?php

use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;
use Illuminate\Support\Facades\Auth;


Route::get('/master', 'DashboardController@master')->name('master');
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes(['verify' => true]);

require(__DIR__ . '../../app/Http/Controllers/Auth/auth.php');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin', 'DashboardController@dashboard')->name('dashboard');
    Route::get('/deconnexion', 'HomeController@deconnexion');
    // CRUDs admin
    Route::resource('categories', 'CategoriesController');
    Route::resource('authors', 'AuthorsController');
    Route::resource('editors', 'EditorsController');
    Route::resource('articles', 'ArticlesController');
    Route::resource('language', 'LanguagesController');
    Route::resource('countrie', 'CountriesController');
    Route::resource('Faqs', 'FaqsController');
    Route::resource('quest', 'QuestsController');
});
Route::resource('/', 'HomesController');


Route::get('/contacts', [ContactsController::class, 'index']);
//Routes articles/blog
Route::resource('blog', 'BlogController');
//Routes a propos
Route::get('a_propos', 'AproposController@vue');
//Routes books
Route::resource('books', 'BooksController');
//Routes Notifications

Route::resource('notifications','NotificationsController');
Route::get('/app', [AppController::class, 'index']);
Route::get('/app/show', [AppController::class, 'show']);
