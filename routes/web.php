<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SerwisController;

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
     return view('welcome');
 });
 Route::get('/home', function () {
    return view('welcome');
});

Route::get('/serwis_sys/users', [SerwisController::class, 'users'])->name('serwis_sys.users');

Route::get('/serwis_sys', [SerwisController::class, 'index'])->name('serwis_sys.index')->middleware('auth');

Route::get('/serwis_sys/create', [SerwisController::class, 'create'])->name('serwis_sys.create');

Route::post('/serwis_sys', [SerwisController::class, 'store'])->name('serwis_sys.store');

Route::get('/serwis_sys/{id}', [SerwisController::class, 'show'])->name('serwis_sys.show')->middleware('auth');

Route::delete('/serwis_sys/{id}', [SerwisController::class, 'destroy'])->name('serwis_sys.destroy')->middleware('auth');

Auth::routes([
    'register' => true
]);


