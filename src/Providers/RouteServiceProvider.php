<?php

declare(strict_types=1);

namespace Money\MoneyPackage\Providers;

use Illuminate\Support\ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    public function map(): void
    {
        Route::domain($this->parsedShortenerURL['host'])
            ->prefix($this->parsedShortenerURL['path'] ?? null)
            ->middleware('web')
            ->group(base_path('Routes/api.php'));
    }
}
