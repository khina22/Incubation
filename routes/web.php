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

Route::get('/logout', function () {
    return view('pages/login');
});



Route::get('/login', [App\Http\Controllers\incubation\IncubationController::class, 'login'])->name('login');
Route::post('/userlogin', [App\Http\Controllers\incubation\IncubationController::class, 'userlogin'])->name('userlogin');
Route::get('pages/admindashboard', [App\Http\Controllers\incubation\IncubationController::class, 'admindashboard'])->name('pages/admindashboard');

Route::get('/listmentors', [App\Http\Controllers\incubation\IncubationController::class, 'listmentors'])->name('listmentors');
Route::get('/mentors', [App\Http\Controllers\incubation\IncubationController::class, 'mentors'])->name('mentors');
Route::post('/mentorsadd', [App\Http\Controllers\incubation\IncubationController::class, 'mentorsadd'])->name('mentorsadd');
Route::get('/mentorsretrieve', [App\Http\Controllers\incubation\IncubationController::class, 'mentorsretrieve'])->name('mentorsretrieve');
Route::get('/delete_mentors/{id}', [App\Http\Controllers\incubation\IncubationController::class, 'delete_mentors'])->name('delete_mentors');
Route::get('/edit_mentors/{id}', [App\Http\Controllers\incubation\IncubationController::class, 'edit_mentors'])->name('edit_mentors');
Route::post('/update_mentors', [App\Http\Controllers\incubation\IncubationController::class, 'update_mentors'])->name('update_mentors');

Route::get('/listevent', [App\Http\Controllers\incubation\IncubationController::class, 'listevent'])->name('listevent');
Route::get('/event', [App\Http\Controllers\incubation\IncubationController::class, 'event'])->name('event');
Route::post('/eventpost', [App\Http\Controllers\incubation\IncubationController::class, 'eventpost'])->name('eventpost');
Route::get('/eventretrieve', [App\Http\Controllers\incubation\IncubationController::class, 'eventretrieve'])->name('eventretrieve');
Route::get('/delete_event/{id}', [App\Http\Controllers\incubation\IncubationController::class, 'delete_event'])->name('delete_event');
Route::get('/edit_event/{id}', [App\Http\Controllers\incubation\IncubationController::class, 'edit_event'])->name('edit_event');
Route::post('/update_event', [App\Http\Controllers\incubation\IncubationController::class, 'update_event'])->name('update_event');

Route::get('/advisoryboard', [App\Http\Controllers\incubation\IncubationController::class, 'advisoryboard'])->name('advisoryboard');
Route::post('/advisorypost', [App\Http\Controllers\incubation\IncubationController::class, 'advisorypost'])->name('advisorypost');
Route::get('/advisoryretrieve', [App\Http\Controllers\incubation\IncubationController::class, 'advisoryretrieve'])->name('advisoryretrieve');
Route::get('/listadvisory', [App\Http\Controllers\incubation\IncubationController::class, 'listadvisory'])->name('listadvisory');
Route::get('/delete_advisory/{id}', [App\Http\Controllers\incubation\IncubationController::class, 'delete_advisory'])->name('delete_advisory');
Route::get('/edit_advisory/{id}', [App\Http\Controllers\incubation\IncubationController::class, 'edit_advisory'])->name('edit_advisory');
Route::post('/update_advisory', [App\Http\Controllers\incubation\IncubationController::class, 'update_advisory'])->name('update_advisory');

Route::get('/incubatees', [App\Http\Controllers\incubation\IncubationController::class, 'incubatees'])->name('incubatees');
Route::post('/incubateepost', [App\Http\Controllers\incubation\IncubationController::class, 'incubateepost'])->name('incubateepost');
Route::get('/incubateeretrieve', [App\Http\Controllers\incubation\IncubationController::class, 'incubateeretrieve'])->name('incubateeretrieve');
Route::get('/listincubatee', [App\Http\Controllers\incubation\IncubationController::class, 'listincubatee'])->name('listincubatee');
Route::get('/delete_incubatee/{id}', [App\Http\Controllers\incubation\IncubationController::class, 'delete_incubatee'])->name('delete_incubatee');
Route::get('/edit_incubatees/{id}', [App\Http\Controllers\incubation\IncubationController::class, 'edit_incubatees'])->name('edit_incubatees');
Route::post('/update_incubatees', [App\Http\Controllers\incubation\IncubationController::class, 'update_incubatees'])->name('update_incubatees');

Route::get('/feedback', [App\Http\Controllers\incubation\IncubationController::class, 'feedback'])->name('feedback');
Route::post('/feedbackpost', [App\Http\Controllers\incubation\IncubationController::class, 'feedbackpost'])->name('feedbackpost');
Route::get('/feedbackretrieve', [App\Http\Controllers\incubation\IncubationController::class, 'feedbackretrieve'])->name('feedbackretrieve');

Route::get('/stakeholder', [App\Http\Controllers\incubation\IncubationController::class, 'stakeholder'])->name('stakeholder');
Route::post('/stakeholderpost', [App\Http\Controllers\incubation\IncubationController::class, 'stakeholderpost'])->name('stakeholderpost');
Route::get('/stakeholderget', [App\Http\Controllers\incubation\IncubationController::class, 'stakeholderget'])->name('stakeholderget');
Route::get('/liststakeholder', [App\Http\Controllers\incubation\IncubationController::class, 'liststakeholder'])->name('liststakeholder');
Route::get('/delete_stakeholder/{id}', [App\Http\Controllers\incubation\IncubationController::class, 'delete_stakeholder'])->name('delete_stakeholder');
Route::get('/edit_stakeholder/{id}', [App\Http\Controllers\incubation\IncubationController::class, 'edit_stakeholder'])->name('edit_stakeholder');
Route::post('/update_stakeholder', [App\Http\Controllers\incubation\IncubationController::class, 'update_stakeholder'])->name('update_stakeholder');

Route::get('/coaching', [App\Http\Controllers\incubation\IncubationController::class, 'coaching'])->name('coaching');
Route::post('/coachingpost', [App\Http\Controllers\incubation\IncubationController::class, 'coachingpost'])->name('coachingpost');
Route::get('/coachingretrieve', [App\Http\Controllers\incubation\IncubationController::class, 'coachingretrieve'])->name('coachingretrieve');
Route::get('/listcoaching', [App\Http\Controllers\incubation\IncubationController::class, 'listcoaching'])->name('listcoaching');
Route::get('/delete_coaching/{id}', [App\Http\Controllers\incubation\IncubationController::class, 'delete_coaching'])->name('delete_coaching');
Route::get('/edit_coaching/{id}', [App\Http\Controllers\incubation\IncubationController::class, 'edit_coaching'])->name('edit_coaching');
Route::post('/update_coaching', [App\Http\Controllers\incubation\IncubationController::class, 'update_coaching'])->name('update_coaching');

Route::get('/application', [App\Http\Controllers\incubation\IncubationController::class, 'application'])->name('application');
Route::post('/applicationpost', [App\Http\Controllers\incubation\IncubationController::class, 'applicationpost'])->name('applicationpost');
Route::get('/applicationretrieve', [App\Http\Controllers\incubation\IncubationController::class, 'applicationretrieve'])->name('applicationretrieve');
