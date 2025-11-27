<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Subjects\PerfilController;


Route::get('/', function () {
    return view('Welcome');
});
Route::get('/dashboard/info',function(){
    return view('Info');
});

Route::get('/schedule', [PerfilController::class, 'schedule'])
     ->middleware('auth')
     ->name('Schedule');
Route::post('/matricular-asignatura', [PerfilController::class, 'matricularAsignatura'])
    ->name('matricular.asignatura');

Route::get('/MatricularMateria', [PerfilController::class, 'newAsignaturas'])
     ->middleware('auth')
     ->name('Matricula');
Route::get('/dashboard/Resume',[PerfilController::class,'subjectResume'])->name('SubjectResume');
Route::get('/dashboard/info',[AuthController::class,'InfoAcademica'])->name('info');
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');