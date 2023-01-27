<?php

use App\Http\Controllers\ExponentController;
use App\Http\Controllers\FiboController;
use App\Http\Controllers\RecursiveController;
use App\Http\Controllers\TestcrudController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [TestcrudController::class, 'index'])->name('person.index');
Route::get('/create', [TestcrudController::class, 'create'])->name('person.create');
Route::post('/saveinfor', [TestcrudController::class, 'saveinfor'])->name('person.saveinfor');
Route::get('/edit/{id}', [TestcrudController::class, 'edit'])->name('person.edit');
Route::put('/update', [TestcrudController::class, 'update'])->name('person.update');
Route::get('/delete/{id}', [TestcrudController::class, 'delete'])->name('person.delete');



Route::get('/fibonacci', [FiboController::class, 'pagefib'])->name('pagefib');
Route::post('/fib', [FiboController::class, 'fibonacci'])->name('fib');

Route::get('/exponent', [ExponentController::class, 'pageExpo'])->name('pageExpo');
Route::post('/calculate',[ExponentController::class, 'calculate'])->name('calculate');

Route::get('/recursive', [RecursiveController::class, 'pageRecu'])->name('pageRecu');
// Route::get('/factorial', [RecursiveController::class, 'calculateFactorial'])->name('factorial');
Route::post('/factorial', [RecursiveController::class, 'calculateFactorial'])->name('factorial');
// Route::get('/recursive-math', 'YourController@calculateRecursiveMath');

// Route::resource('person',TestcrudController::class)->name('person.saveinfor');