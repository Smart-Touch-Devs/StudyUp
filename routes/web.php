<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AppController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\FavorisController;
use App\Http\Controllers\paymentBookController;
use Illuminate\Support\Facades\Auth;




// Route::get('/master', 'DashboardController@master')->name('master');
Route::get('/', 'HomeController@index')->name('home');
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

Route::get('/account',[AccountController::class,'index'])->name('account.index');
Route::post('/deposit',[AccountController::class,'store'])->name('account.store');
Route::post('payments',[paymentBookController::class,'store'])->name('payment.store');
Route::get('payments',[paymentBookController::class,'index'])->name('payment.index');
});
// Route::resource('/', 'HomesController');


Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts');
//Routes articles/blog
Route::resource('blog', 'BlogController');
//Routes a propos
Route::get('a_propos', 'AproposController@vue')->name('a_propos');
//Routes books
Route::resource('books', 'BooksController');
//Routes Notifications

Route::resource('notifications','NotificationsController');
Route::get('/app', [AppController::class, 'index'])->name('app.index');
Route::get('/app/show', [AppController::class, 'show']);
Route::get('/app/bookShow/{id}', [AppController::class, 'bookShow'])->name('show');
Route::post('/deconnexion', [AppController::class, 'deconnexion'])->name('deconnexion');
// Route::get('/favoris',[FavorisController::class,'index'])->name('favoris.index');
// Route::post('/favoris',[FavorisController::class,'store'])->name('favoris.store');


Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');
