<?php

use App\Http\Controllers\StudentController;
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

Route::get('/', [StudentController::class, 'index']);
Route::prefix('students')->group(function () {
    Route::get('/create', [StudentController::class, 'createStudent']);
    Route::post('/store', [StudentController::class, 'storeStudent']);
    Route::get('/{id}/edit', [StudentController::class, 'editStudent']);
    Route::post('/{id}/edit', [StudentController::class, 'updateStudent']);
    Route::get('/{id}/delete', [StudentController::class, 'deleteStudent']);
    Route::get('/trashed', [StudentController::class, 'trashedStudents']);
    Route::get('/{id}/restore', [StudentController::class, 'restoreStudent']);
});
