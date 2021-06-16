<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionsController;

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
    return view('questions');
});

Route::post('/submit', [QuestionsController::class, 'submit']);
Route::post('/edit/{catId}', [QuestionsController::class, 'edit']);
Route::post('/delete/{id}', [QuestionsController::class, 'delete']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
