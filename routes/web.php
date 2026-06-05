<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\OrganizationController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StudentController::class, 'index']);

Route::get('/Student', [StudentController::class, 'index'])->name('Student.index');
Route::get('/Student/create', [StudentController::class, 'create'])->name('Student.create');
Route::post('/Student/store', [StudentController::class, 'store'])->name('Student.store');
Route::get('/Student/{student}edit', [StudentController::class, 'edit'])->name('Student.edit');
Route::put('/Student/{student}', [StudentController::class, 'update'])->name('Student.update');
Route::delete('/Student/{student}', [StudentController::class, 'destroy'])->name('Student.destroy');

// soft delete
Route::get('/Student/trash', [StudentController::class, 'trash'])->name('Student.trash');
Route::put('/Student/restore/{student}', [StudentController::class, 'restore'])->name('Student.restore')->withTrashed();
Route::patch('/Student/force-delete/{student}', [StudentController::class, 'forceDelete'])->name('Student.forceDelete')->withTrashed();

Route::resource('department', DepartmentController::class);
Route::resource('lecturer', LecturerController::class);
Route::resource('organization', OrganizationController::class);
