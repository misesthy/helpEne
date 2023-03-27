<?php

/** User **/

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'users'], function () {

    /** index */
    Route::get('/', [UserController::class, 'index'])->middleware(['auth'])->name('users');

    /** add & edit */
    Route::get('/add', function () {
        return view('users.add-edit');
    })->middleware(['auth'])->name('users.add');

    Route::get('/edit/{id}', function () {
        return view('users.add-edit');
    })->middleware(['auth'])->name('users.edit');

    /** view */
    Route::get('/{id}', function () {
        return view('users.view');
    })->middleware(['auth'])->name('users.view');

    /** delete */
    Route::delete('/{id}', [UserController::class, 'delete'])->middleware(['auth'])->name('users.delete');
});
