<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthController;


Route::get('/', function () {
    return view('Welcome');
});
Route::get('/dashboard/info',function(){
    return view('Info');
});
Route::get('/dashboard/matricula',[AuthController::class,'InfoMatricula'])->name('asignaturas');
Route::get('/dashboard/info',[AuthController::class,'InfoAcademica'])->name('info');
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');