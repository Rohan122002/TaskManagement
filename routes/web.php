<?php

use App\Http\Controllers\calenderController;
use App\Http\Controllers\projectController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\settingController;
use App\Http\Controllers\signinController;
use App\Http\Controllers\taskController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;


// Register routes
Route::get('/register', [registerController::class, 'register'])->name('register');
Route::post('/register', [registerController::class, 'store'])->name('register');

//Signin
Route::get('/signin',[signinController::class,'index'])->name('account-signin');
Route::post('/signin',[signinController::class,'signin'])->name('account-signin');




// Dashboard
Route::get('/dashboard',[userController::class,'dashboard'])->name('dashboard');
Route::get('/user-create', [userController::class, 'storeUser'])->name('user-create');
Route::post('/user-create', [userController::class, 'storeUser'])->name('user-create');
Route::get('/user-edit/{id}', [UserController::class, 'edit'])->name('user-edit');
Route::post('/user-edit/{id}', [UserController::class, 'update'])->name('user-edit');
Route::get('/user-destroy/{id}', [UserController::class, 'destroy'])->name('user-destroy');


// Task Routes
Route::get('/task',[taskController::class,'taskBoard'])->name('task');
Route::post('/task-create',[taskController::class,'create'])->name('task-create');
Route::get('/task-store',[taskController::class,'store'])->name('task-store');
Route::get('/task-destroy/{id}', [taskController::class, 'destroy'])->name('task-destroy');
Route::get('/task-edit/{id}', [taskController::class, 'edit'])->name('task-edit');
Route::post('/task-edit/{id}', [taskController::class, 'update'])->name('task-edit');


//Project Routes
Route::get('/projects',[projectController::class,'index'])->name('projects');
Route::post('/project-create',[projectController::class,'create'])->name('project-create');
// Route::get('/project-create',[projectController::class,'create'])->name('project-create');
Route::get('/project-delete/{id}', [projectController::class, 'destroy'])->name('project-delete');
Route::get('/project-edit/{id}', [projectController::class, 'edit'])->name('project-edit');
Route::post('/project-edit/{id}', [projectController::class, 'update'])->name('project-update');


// Team
Route::get('/teams', [TeamController::class, 'index'])->name('teams');
Route::post('/team-create', [TeamController::class, 'create'])->name('team-create');
Route::get('/team-edit/{id}', [TeamController::class, 'edit'])->name('team-edit');
Route::post('/team-edit/{id}', [TeamController::class, 'update'])->name('team-update');
Route::get('/team-delete/{id}', [TeamController::class, 'destroy'])->name('team-delete');


// Calender
Route::get('/calender',[calenderController::class,'index'])->name('calender');



// Setting
Route::get('/settings',[settingController::class,'index'])->name('settings');


