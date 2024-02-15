<?php

use App\Http\Controllers\CheckInController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LunchController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SnackController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/home', [HomeController::class, 'index']);

Route::get('/participants', [ParticipantController::class, 'index']);
Route::get('/supporters', [ParticipantController::class, 'supporter']);

Route::get('/ticket', [TicketController::class, 'index']);
Route::get('/ticket', [TicketController::class, 'index']);
Route::post('/ticket/generate', [TicketController::class, 'store']);

Route::get('/checkin', [CheckInController::class, 'index']);
Route::get('/checkin/scan', [CheckInController::class, 'scan']);
Route::post('/checkin/submit', [CheckInController::class, 'store']);

Route::get('/snack', [SnackController::class, 'index']);
Route::get('/snack/scan', [SnackController::class, 'scan']);
Route::post('/snack/submit', [SnackController::class, 'store']);

Route::get('/lunch', [LunchController::class, 'index']);
Route::get('/lunch/scan', [LunchController::class, 'scan']);
Route::post('/lunch/submit', [LunchController::class, 'store']);
