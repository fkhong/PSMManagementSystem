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
Route::resource('dataEntryLec',\App\Http\Controllers\DataController::class);
Route::resource('dataEntryCoo',\App\Http\Controllers\DataController::class);
Route::resource('rubric',\App\Http\Controllers\RubricController::class);
Route::resource('evaluationProcess',\App\Http\Controllers\EvaluationController::class);
Route::resource('evaluationReminder',\App\Http\Controllers\ReminderController::class);
Route::resource('report',\App\Http\Controllers\ReportController::class);

//Manage Calculations Routes (Kin Hong)
Route::get('/addSchedule','\App\Http\Controllers\CalculationController@addSchedule');
Route::post('/addSchedule','App\Http\Controllers\CalculationController@storeSchedule' );
Route::get('/viewSchedule','\App\Http\Controllers\CalculationController@viewSchedule');
Route::delete('/viewSchedule/{industrialEvaluationId}','\App\Http\Controllers\CalculationController@deleteSchedule');
Route::get('/editSchedule/{industrialEvaluationId}','\App\Http\Controllers\CalculationController@editSchedule');
Route::post('/editSchedule','\App\Http\Controllers\CalculationController@updateSchedule');
Route::get('/test','\App\Http\Controllers\CalculationController@test');
Route::get('/calculateTotal/{studentId}','\App\Http\Controllers\CalculationController@calculateTotal');

//Manage Data Entry Routes (Min Wei)
Route::get('/addData','\App\Http\Controllers\DataController@addData');
Route::post('/addData','App\Http\Controllers\DataController@storeData' );
Route::get('/viewData','\App\Http\Controllers\DataController@viewData');
Route::get('/editData/{studentId}','\App\Http\Controllers\DataController@editData');
Route::post('/editData','\App\Http\Controllers\DataController@updateData');
Route::delete('/viewData/{studentId}','\App\Http\Controllers\DataController@deleteData');
//Lecturer
Route::get('/addLecData','\App\Http\Controllers\DataController@addLecData');
Route::post('/addLecData','App\Http\Controllers\DataController@storeLecData' );
Route::get('/viewLecData','\App\Http\Controllers\DataController@viewLecData');
Route::get('/editLecData/{lecturerID}','\App\Http\Controllers\DataController@editLecData');
Route::post('/editLecData','\App\Http\Controllers\DataController@updateLecData');
Route::delete('/viewLecData/{lecturerID}','\App\Http\Controllers\DataController@deleteLecData');
//Coordinator
Route::get('/addCooData','\App\Http\Controllers\DataController@addCooData');
Route::post('/addCooData','App\Http\Controllers\DataController@storeCooData' );
Route::get('/viewCooData','\App\Http\Controllers\DataController@viewCooData');
Route::get('/editCooData/{coordinatorID}','\App\Http\Controllers\DataController@editCooData');
Route::post('/editCooData','\App\Http\Controllers\DataController@updateCooData');
Route::delete('/viewCooData/{coordinatorID}','\App\Http\Controllers\DataController@deleteCooData');

//Manage Report Routes (Jimmy)
Route::get('/search','\App\Http\Controllers\ReportController@search');
Route::get('/viewReport','\App\Http\Controllers\ReportController@viewReport');
Route::get('/saveData/{studentId}','\App\Http\Controllers\ReportController@bookmark');
Route::get('/unbookmarked/{studentId}','\App\Http\Controllers\ReportController@unbookmarked');
Route::get('/bookmarked/{studentId}','\App\Http\Controllers\ReportController@bookmark2');

//Manage Rubric Routes (Teo)
Route::get('/addRubric','\App\Http\Controllers\RubricController@addRubric');
Route::post('/addRubric','App\Http\Controllers\RubricController@storeRubric' );
Route::get('/updateRubric/{rubricID}','\App\Http\Controllers\RubricController@updateRubric');
Route::post('/updateRubric','\App\Http\Controllers\RubricController@editRubric'); 

//Manage Evaluation Process Routes (Brenda)
Route::get('/addEvaluation','\App\Http\Controllers\EvaluationController@addEvaluation');
Route::post('/addEvaluation','App\Http\Controllers\EvaluationController@storeEvaluation' );
Route::get('/viewEvaluation','\App\Http\Controllers\EvaluationController@viewEvaluation');
Route::delete('/viewEvaluation/{studentId}','\App\Http\Controllers\EvaluationController@deleteEvaluation');
Route::get('/editEvaluation/{studentId}','\App\Http\Controllers\EvaluationController@editEvaluation');
Route::post('/editEvaluation','\App\Http\Controllers\EvaluationController@updateEvaluation');