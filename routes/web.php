<?php
use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Counter;

Route::livewire('/', 'home')->name('home')->middleware('auth');


Route::group(['middleware'=>'guest'], function () {
    Route::livewire('/login', 'login')->name('login');
    Route::livewire('/register', 'register');
});
Route::get('/counter', [Counter::class, '__invoke']);