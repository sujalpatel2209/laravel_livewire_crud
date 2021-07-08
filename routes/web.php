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
    return view('layout');
});

Route::get('dashboard', \App\Http\Livewire\Dashboard::class)->name('dashboard');
Route::get('user', \App\Http\Livewire\UserIndex::class)->name('user');
Route::get('add_user', function (){
    return view('pages.add-user-page');
})->name('add_user');