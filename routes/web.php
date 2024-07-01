<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TicketController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('tickets')->group(function () {
        Route::get('/', [TicketController::class, 'index'])->name('tickets.index');
        Route::get('/create', [TicketController::class, 'create'])->name('tickets.create');
        Route::post('/', [TicketController::class, 'store'])->name('tickets.store');
        Route::get('/{ticket}', [TicketController::class, 'show'])->name('tickets.show');
        Route::get('/{ticket}/edit', [TicketController::class, 'edit'])->name('tickets.edit');
        Route::put('/{ticket}', [TicketController::class, 'update'])->name('tickets.update');
        Route::delete('/{ticket}', [TicketController::class, 'destroy'])->name('tickets.destroy');
        Route::get('/{ticket}/close', [TicketController::class, 'close'])->name('tickets.close');
    });

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

require __DIR__.'/auth.php';
