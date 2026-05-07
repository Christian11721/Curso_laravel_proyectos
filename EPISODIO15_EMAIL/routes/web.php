<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\MailController;

Route::get('/', [MailController::class, 'index'])->name('index');
Route::get('/mailme', [MailController::class, 'mailMe'])->name('mailMe');
