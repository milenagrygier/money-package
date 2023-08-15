<?php

declare(strict_types=1);

namespace Money\MoneyPackage\Services;

class BaseMoneyService
{
    public function randomInt(): int
    {
        return random_int(1, 333);
    }
}
