<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

// Route::get('/test', function () {
//     $data = env('USER_ADMIN');
//     dd($data);
// });

Route::middleware(['Admin'])->group(function () {
    Route::resource('/admin', 'Admincontroller');
    Route::resource('/adm', 'admin1');
    Route::resource('/datapengguna', 'datapenggunacontroller');

    Route::resource('/datatopup', 'datatopupcontroller');
    Route::resource('/datatransfer', 'datatransfercontroller');
    Route::get('/fromemail', 'emailcontroller@index')->name('fromemail.index');
    Route::post('/kirim', 'emailcontroller@kirim');
});

Route::middleware(['User'])->group(function () {
    // Route::resource('/user', 'Usercontroller');

      Route::resource('/artikel', 'artikelcontroller');
    Route::resource('/tampilan', 'Usercontroller');
    Route::resource('/pengguna', 'penggunacontroller');
    Route::resource('/topup', 'topupcontroller');
    Route::resource('/transfer', 'transfercontroller');
});
Route::resource('/registerr', 'register2');

Route::get('/', 'HomeController@index')->name('home');
Route::match(['get', 'post'], '/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');
