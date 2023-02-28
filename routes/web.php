<?php

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
    return view('home');
});
Route::get('/inscrever', function () {
    return view('inscrever');
});
Route::post('/inscricao-2023', [App\Http\Controllers\PageController::class, 'inscricao'])->name('inscricao');

