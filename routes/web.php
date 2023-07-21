<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

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
Route::get('/',[HomeController::class,'index'])->name('home');
Route::post('/store-message',[ClientController::class,'storeMessage'])->name('store.message');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard',[AdminController::class,'index'])->name('dashboard');
    Route::get('/dashboard/create-project',[ProjectController::class,'createProject'])->name('project.create');
    Route::post('/dashboard/store-project',[ProjectController::class,'storeProject'])->name('project.store');
    Route::get('/dashboard/manage-project',[ProjectController::class,'manageProject'])->name('project.manage');
    Route::get('/dashboard/delete-project/{id}',[ProjectController::class,'deleteProject'])->name('project.delete');
    Route::get('/dashboard/edit-project/{id}',[ProjectController::class,'editProject'])->name('project.edit');
    Route::post('/dashboard/update-project',[ProjectController::class,'updateProject'])->name('project.update');
    Route::get('/dashboard/delete-message/{id}',[ClientController::class,'deleteMessage'])->name('client.message');
});
