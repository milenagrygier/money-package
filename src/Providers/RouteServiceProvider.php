<?php

declare(strict_types=1);

namespace Money\MoneyPackage\Providers;

use Illuminate\Support\ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    public function map(): void
    {
        Route::group(app_path('Routes/api.php'));
    }
}
