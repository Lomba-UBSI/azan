<?php

use App\Http\Controllers\MustahiqController;
use App\Models\Menu;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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

Route::get('/test', function () {
    $menu = Menu::where('id', 2)->with('subMenu')->first();
    return $menu;
});

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::get('/', 'EndUserController@index')->name('beranda.index');

    Route::group(["middleware" => "auth"], function () {
        Route::group(["prefix" => 'dashboard', "name" => 'dashboard', 'as' => 'dashboard'], function () {
            Route::get('/', 'DashboardController@index')->name('.index');
            Route::get('/amil', 'DashboardController@amil')->name('.amil');
            Route::get('/super', 'DashboardController@super')->name('.super');
        });
        Route::group(["prefix" => 'amil', "name" => 'amil', 'as' => 'amil'], function () {
            Route::get('/input-zakat', 'ZakatController@inputAmil')->name('.input-zakat');
            Route::post('/input-zakat', 'ZakatController@inputAmilStore')->name('.input-zakat');
        });

        Route::resource('profile', DashboardController::class);
        Route::resource('mustahiq', MustahiqController::class);
        Route::post("/user-activate/{user}", "DashboardController@userActivate")->name('activate-user');
    });


    Route::group(["prefix" => 'zakat', "name" => 'zakat', 'as' => 'zakat'], function () {
        Route::get('/', 'ZakatController@index')->name('.index');
        Route::post('/', 'ZakatController@paymentMethod')->name('.index');
    });

    Route::post('/confirm-payment', "ZakatController@confirmPayment")->name('confirm.payment');

    Route::group(["prefix" => 'form', "name" => 'form', 'as' => 'form'], function () {
        Route::get('pengajuan-amil', "FormController@pengajuanAmil")->name('.pengajuan-amil');
        Route::post('pengajuan-amil', "FormController@storePengajuanAmil")->name('.store-pengajuan-amil');
    });
    Route::group(["prefix" => 'donasi', "name" => 'donasi', 'as' => 'donasi'], function () {
        Route::get('pengajuan-amil', "FormController@pengajuanAmil")->name('.index');
    });

    Route::group(["prefix" => 'auth', "name" => 'auth', 'as' => 'auth'], function () {
        Route::get('/', 'AuthController@index')->name('.index');
        Route::post('login', 'AuthController@login')->name('.login');
        Route::post('logout', 'AuthController@logout')->name('.logout');
        Route::get('google/redirect', function () {
            return Socialite::driver('google')->redirect();
        })->name('.google-redirect');
        Route::get('google/callback', 'AuthController@googleCallback');
    });
});
