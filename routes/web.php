<?php

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

    Route::group(["prefix" => 'dashboard', "name" => 'dashboard', 'as' => 'dashboard'], function () {
        Route::get('/', 'DashboardController@index')->name('.index');
        Route::get('/amil', 'DashboardController@amil')->name('.amil');
    });
    Route::group(["prefix" => 'zakat', "name" => 'zakat', 'as' => 'zakat'], function () {
        Route::get('/', 'DashboardController@index');
        Route::get('/mal', 'DashboardController@index')->name('.mal');
        Route::get('/fitrah', 'DashboardController@index')->name('.fitrah');
    });
    Route::resource('profile', DashboardController::class);

    Route::group(["prefix" => 'form', "name" => 'form', 'as' => 'form'], function () {
        Route::get('pengajuan-amil', "FormController@pengajuanAmil")->name('.pengajuan-amil');
    });

    Route::group(["prefix" => 'auth', "name" => 'auth', 'as' => 'auth'], function () {
        Route::post('logout', 'AuthController@logout')->name('.logout');
        Route::get('google/redirect', function () {
            return Socialite::driver('google')->redirect();
        })->name('.google-redirect');
        Route::get('google/callback', 'AuthController@googleCallback');
    });
});
