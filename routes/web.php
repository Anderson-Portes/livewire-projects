<?php

use App\Http\Livewire\Calculator;
use App\Http\Livewire\CascadingDropdown;
use App\Http\Livewire\ImageUpload;
use App\Http\Livewire\ProductSearch;
use App\Http\Livewire\RegisterForm;
use App\Http\Livewire\TodoList;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
})->name('counter');
Route::get('/calculator', Calculator::class)->name('calculator');
Route::get('todo-list', TodoList::class)->name('todo-list');
Route::get('cascading-dropdown', CascadingDropdown::class)->name('cascading-dropdown');
Route::get('products', ProductSearch::class)->name('products');
Route::get('image-upload', ImageUpload::class)->name('image-upload');
Route::get('register', RegisterForm::class)->name('register');
