<?php

use hamidrezakiani\Ticket\Controllers\TicketController;
use Illuminate\Support\Facades\Route;


Route::get('tickets',[TicketController::class,'index']);
Route::get('tickets/store',[TicketController::class,'store']);