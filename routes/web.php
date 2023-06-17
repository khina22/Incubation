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
    return view('welcome');
});

Route::get('about', function () {
    return view('pages/about');
});


Route::get('/login', [App\Http\Controllers\incubation\IncubationController::class, 'login'])->name('login');
Route::post('/userlogin', [App\Http\Controllers\incubation\IncubationController::class, 'userlogin'])->name('userlogin');
Route::get('pages/admindashboard', [App\Http\Controllers\incubation\IncubationController::class, 'admindashboard'])->name('pages/admindashboard');
Route::get('/mentors', [App\Http\Controllers\incubation\IncubationController::class, 'mentors'])->name('mentors');
Route::post('/mentorsadd', [App\Http\Controllers\incubation\IncubationController::class, 'mentorsadd'])->name('mentorsadd');
Route::get('/mentorsretrieve', [App\Http\Controllers\incubation\IncubationController::class, 'mentorsretrieve'])->name('mentorsretrieve');
Route::get('/event', [App\Http\Controllers\incubation\IncubationController::class, 'event'])->name('event');
Route::post('/eventpost', [App\Http\Controllers\incubation\IncubationController::class, 'eventpost'])->name('eventpost');
Route::get('/eventretrieve', [App\Http\Controllers\incubation\IncubationController::class, 'eventretrieve'])->name('eventretrieve');
Route::get('/advisoryboard', [App\Http\Controllers\incubation\IncubationController::class, 'advisoryboard'])->name('advisoryboard');
Route::post('/advisorypost', [App\Http\Controllers\incubation\IncubationController::class, 'advisorypost'])->name('advisorypost');
Route::get('/advisoryretrieve', [App\Http\Controllers\incubation\IncubationController::class, 'advisoryretrieve'])->name('advisoryretrieve');
Route::get('/incubatees', [App\Http\Controllers\incubation\IncubationController::class, 'incubatees'])->name('incubatees');
Route::post('/incubateepost', [App\Http\Controllers\incubation\IncubationController::class, 'incubateepost'])->name('incubateepost');
Route::get('/incubateeretrieve', [App\Http\Controllers\incubation\IncubationController::class, 'incubateeretrieve'])->name('incubateeretrieve');
Route::get('/feedback', [App\Http\Controllers\incubation\IncubationController::class, 'feedback'])->name('feedback');
Route::post('/feedbackpost', [App\Http\Controllers\incubation\IncubationController::class, 'feedbackpost'])->name('feedbackpost');
Route::get('/feedbackretrieve', [App\Http\Controllers\incubation\IncubationController::class, 'feedbackretrieve'])->name('feedbackretrieve');
Route::get('/stakeholder', [App\Http\Controllers\incubation\IncubationController::class, 'stakeholder'])->name('stakeholder');
Route::post('/stakeholderpost', [App\Http\Controllers\incubation\IncubationController::class, 'stakeholderpost'])->name('stakeholderpost');
Route::get('/stakeholderget', [App\Http\Controllers\incubation\IncubationController::class, 'stakeholderget'])->name('stakeholderget');
