<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PortalController;
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
    // return view('welcome');
    return redirect()->route('portal');
});

Route::get('/', [PortalController::class, 'index']);
Route::get('/portal', [PortalController::class, 'index'])->name('portal');



Route::group(['namespace' => 'Auth'], function () {
    // Namespace Auth

    // Route::get('/', function(){
    //     return redirect()->route('auth.login');
    // });

    Route::prefix('login')->group(function () {
        Route::get('/', 'LoginController@index')->name('auth.login');
        Route::post('/processLogin', 'LoginController@processLogin')->name('auth.login.process');

        Route::get('/logout', 'LoginController@logout')->name('auth.logout');
    });

    // Route::prefix('register')->group(function () {
    //     Route::get('/', 'RegisterController@index')->name('auth.register');
    // });

    // Route::prefix('forget')->group(function () {
    //     Route::get('/', 'ForgetController@index')->name('auth.forget');
    // });
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout', function () {
    return redirect()->route('auth.logout');
});


Route::middleware('auth')->group(function () {
    Route::group(['namespace' => 'Backend'], function () {
        Route::group(['namespace' => 'Master'], function () {
            // Namespace Backend/Master

            Route::prefix('master')->group(function () {
                Route::prefix('obat')->group(function () {
                    Route::post('/data', 'ObatController@getData')->name('master.obat.data');
                    Route::get('/list', 'ObatController@index')->name('master.obat.list');
                    Route::get('/create', 'ObatController@create')->name('master.obat.create');
                    Route::post('/create', 'ObatController@store')->name('master.obat.add');
                    Route::get('/edit/{id}', 'ObatController@edit')->name('master.obat.edit');
                    Route::post('/update', 'ObatController@update')->name('master.obat.update');
                    Route::post('/delete', 'ObatController@destroy')->name('master.obat.delete');
                });
            });
        });

        Route::group(['namespace' => 'Transaksi'], function () {
            // Namespace Backend/Transaksi

            Route::prefix('transaksi')->group(function () {
                Route::prefix('obat')->group(function () {
                    Route::post('/data', 'Trans_ObatController@getData')->name('transaksi.obat.data');
                    Route::get('/list', 'Trans_ObatController@index')->name('transaksi.obat.list');
                    Route::get('/create', 'Trans_ObatController@create')->name('transaksi.obat.create');
                    Route::post('/create', 'Trans_ObatController@store')->name('transaksi.obat.add');
                    Route::get('/edit/{id}', 'Trans_ObatController@edit')->name('transaksi.obat.edit');
                    Route::post('/update', 'Trans_ObatController@update')->name('transaksi.obat.update');
                    Route::post('/delete', 'Trans_ObatController@destroy')->name('transaksi.obat.delete');
                    Route::post('/getObat', 'Trans_ObatController@getObat')->name('transaksi.obat.getObat');
                });
            });
        });
    });
});

// Others
Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('view:clear');
    $exitCode = Artisan::call('route:clear');
    $exitCode = Artisan::call('config:cache');
    $exitCode = Artisan::call('view:cache');
    $exitCode = Artisan::call('route:cache');
    // $exitCode = Artisan::call('clear-compiled');

    return 'DONE'; //Return anything
});

Route::get('/clear-cache2', function () {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('view:clear');
    $exitCode = Artisan::call('route:clear');
    return 'DONE'; //Return anything
});
