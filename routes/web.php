<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
    return view('home');
});
Route::get('/upload', function(){
    return view('upload');
});
//for uploading to database
Route::post('/upload-form/fileupload',[UsersController::class,'upload'])->name('uploadusers');

Route::post('/register', [UserController::class, 'register']
);
Route::post('/logout', [UserController::class, 'logout']
);
Route::post('/login', [UserController::class, 'login']
);
Route::get('/update', 'App\Http\Controllers\ClientController@updatePrep');

Route::get('/', [UserController::class, 'getRecords']
);

 ?>

