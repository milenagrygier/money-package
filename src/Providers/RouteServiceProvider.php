<?php

declare(strict_types=1);

namespace Money\MoneyPackage\Providers;

use Illuminate\Support\ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadRoutesFrom(base_path('routes/web.php');
    }
}
