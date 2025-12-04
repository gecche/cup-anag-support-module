<?php

use Illuminate\Support\Facades\Route;
use Modules\Unico\Http\Controllers\CupAnagSupportController;


Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('cup-anag-supports', CupAnagSupportController::class)->names('cup-anag-support');
});