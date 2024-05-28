<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\NoteappController;
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
Route::get('/login', function () {
    return "Welcome Oluwapelumi to Laravel";
});
Route::get('/index', [UserController::class, 'index']);

Route::post('/register', [UserController::class, 'register']);

Route::get('/noteapp', [NoteappController::class, 'shownote']);
Route::post('/noteapp_process', [NoteappController::class, 'addnote']);

Route::get('/displaynote', [NoteappController::class, 'displaynote']);

Route::get('/viewnote/{id}', [NoteappController::class, 'show']);

Route::get('/displaynote/edit/{id}', [NoteappController::class, 'edit']);
Route::post('/displaynote/edit/{id}', [NoteappController::class, 'update']);

Route::get('/displaynote/delete/{id}', [NoteappController::class, 'delete']);





