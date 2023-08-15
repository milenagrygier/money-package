<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Money\MoneyPackage\Controllers\MoneyController;

Route::get('/test', [MoneyController::class, 'show']);
