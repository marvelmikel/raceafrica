<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MembershipController;

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
if (App::environment('production')) {
    URL::forceScheme('https');
}

Route::get('/', function () {
    return view('index');
});

Route::get('/ralfregister', function () {
    return view('ralfregister');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/ralf', function () {
    return view('ralf');
});

Route::get('/iffa', function () {
    return view('iffa');
});


Route::get('/memberships/register', [ MembershipController::class, 'create']  )->name('memberships.create');
Route::get('/memberships/reg-confirm', [ MembershipController::class, 'regConfirm']  )->name('memberships.reg_confirm');
Route::post('/memberships', [ MembershipController::class, 'store']  )->name('memberships.store');
