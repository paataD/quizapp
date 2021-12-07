<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppUserController;
use App\Http\Controllers\ManageUserController;
use App\Http\Controllers\SectionsController;
use App\Http\Controllers\ResultsController;
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
Route::get('/mail-test', function (){
   return \App\Models\Section::with('questions.answers')->where('id',7)->get();
});


Route::get('/', [\App\Http\Controllers\QuizController::class, 'index'])->name('welcome');
Route::get('/quiz/{id}', [\App\Http\Controllers\QuizController::class, 'index']);

Route::middleware(['auth', 'verified', 'role:admin'])->prefix('admin')->group(function () {

    //Route::resource('users', ManageUserController::class);

    Route::get('/users', [ManageUserController::class, 'index'])->name('usersIndex');

    Route::get('/adminhome', [AdminController::class, 'adminhome'])->name('adminhome');

    Route::get('/createSection', [SectionsController::class, 'createSection'])
        ->name('createSection');

    Route::post('/deleteSection/{id}', [SectionsController::class, 'deleteSection'])
        ->name('deleteSection');

    Route::post('/storeSection/section', [SectionsController::class, 'storeSection'])
        ->name('storeSection');

    Route::get('/editSection/{section}', [SectionsController::class, 'editSection'])
        ->name('editSection');

    Route::post('/updateSection/{section}', [SectionsController::class, 'updateSection'])
        ->name('updateSection');

    Route::get('/listSection', [SectionsController::class, 'listSection'])
        ->name('listSection');

    Route::get('/detailSection/{section}', [SectionsController::class, 'detailSection'])
        ->name('detailSection');

    Route::get('/createResult/{section}', [ResultsController::class, 'createResult'])
         ->name('createResult');

    Route::post('/storeResult/{section}', [ResultsController::class, 'storeResult'])
         ->name('storeResult');

    Route::get('/detailResult/{result}', [ResultsController::class, 'detailResult'])
         ->name('detailResult');

    Route::post('/updateResult/{result}', [SectionsController::class, 'updateResult'])
         ->name('updateResult');

    Route::get('/deleteResult/{result}', [QuestionsController::class, 'deleteResult'])
         ->name('deleteResult');

    Route::get('/createQuestion/{section}', [QuestionsController::class, 'createQuestion'])
        ->name('createQuestion');

    Route::get('/detailQuestion/{question}', [QuestionsController::class, 'detailQuestion'])
        ->name('detailQuestion');

    Route::get('/editQuestion/{question}', [QuestionsController::class, 'editQuestion'])
         ->name('editQuestion');

    Route::post('/updateQuestion/{question}', [QuestionsController::class, 'updateQuestion'])
         ->name('updateQuestion');

    Route::post('/storeQuestion/{section}', [QuestionsController::class, 'storeQuestion'])
        ->name('storeQuestion');

    Route::post('/deleteQuestion/{id}', [QuestionsController::class, 'deleteQuestion'])
        ->name('deleteQuestion');
});

Route::middleware(['auth', 'verified', 'role:admin|user'])->prefix('appuser')->group(function () {

    Route::get('/userQuizHome', [AppUserController::class, 'userQuizHome'])
        ->name('userQuizHome');

    Route::get('/userQuizDetails/{id}', [AppUserController::class, 'userQuizDetails'])
        ->name('userQuizDetails');

    Route::post('/deleteUserQuiz/{id}', [AppUserController::class, 'deleteUserQuiz'])
        ->name('deleteUserQuiz');


});
Route::get('/startQuiz', [AppUserController::class, 'startQuiz'])
    ->name('startQuiz');
