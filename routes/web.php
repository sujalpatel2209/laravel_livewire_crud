<?php

use App\Http\Livewire\Dashboard;
use App\Http\Livewire\UserAdd;
use App\Http\Livewire\UserIndex;
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

Route::livewire('dashboard', 'dashboard')->name('dashboard');
Route::livewire('user', 'user-index')->name('user');
Route::livewire('user/add', 'user-add')->name('add_user');
Route::livewire('user/edit/{id}', 'user-edit')->name('edit_user');