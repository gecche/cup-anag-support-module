<?php

use Illuminate\Support\Facades\Route;
use Modules\CupAnagSupport\Http\Controllers\CupAnagSupportController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('cup-anag-supports', CupAnagSupportController::class)->names('cup-anag-support');
});
