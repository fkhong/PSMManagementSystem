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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::resource('psmCalculation',\App\Http\Controllers\CalculationController::class);
Route::resource('dataEntry',\App\Http\Controllers\DataController::class);
Route::resource('rubric',\App\Http\Controllers\RubricController::class);
Route::resource('evaluationProcess',\App\Http\Controllers\EvaluationController::class);
Route::resource('evaluationReminder',\App\Http\Controllers\ReminderController::class);
Route::resource('report',\App\Http\Controllers\ReportController::class);


Route::get('/addSchedule','\App\Http\Controllers\CalculationController@addSchedule');
Route::post('/addSchedule','App\Http\Controllers\CalculationController@storeSchedule' );
Route::get('/viewSchedule','\App\Http\Controllers\CalculationController@viewSchedule');
Route::delete('/viewSchedule/{industrialEvaluationId}','\App\Http\Controllers\CalculationController@deleteSchedule');
Route::get('/editSchedule/{industrialEvaluationId}','\App\Http\Controllers\CalculationController@editSchedule');
Route::post('/editSchedule','\App\Http\Controllers\CalculationController@updateSchedule');
Route::get('/test','\App\Http\Controllers\CalculationController@test');
