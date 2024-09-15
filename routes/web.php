<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
    ],
    function () {
        Livewire::setUpdateRoute(function ($handle) {
            return Route::post('/custom/livewire/update', $handle);
        });

        Route::group(['prefix' => 'admin', 'sa' => 'admin'], function () {
            Route::view('/administrator', 'backend.empty')->name('admin.administrator');
            Route::view('/user', 'backend.users.component')->name('admin.users');
            Route::view('/BillinCategories', 'backend.billing-categories.component')->name('admin.billing-categories');
            Route::view('/products', 'backend.products.component')->name('admin.product');
            Route::view('/ProductCategories', 'backend.product-categories.component')->name('admin.product-categories');
            Route::view('/rols', 'backend.rols.component')->name('admin.rols');
            Route::view('/safes', 'backend.safes.component')->name('admin.safe');
            Route::view('/tags', 'backend.tags.component')->name('admin.tag');
        });

        Route::view('/', 'welcome');
        Auth::routes();

        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

        Route::get('/administrator', function () {
            return view('backend.empty');
        });
    },
);
