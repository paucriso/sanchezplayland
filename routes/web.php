<?php

use App\Http\Controllers\InflableController;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/brincolines', [InflableController::class, 'index'])->name('brincolines.index');
Route::get('/brincolines/{brincolin}', [InflableController::class, 'show'])->name('brincolines.show');
