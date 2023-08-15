<?php

declare(strict_types=1);

namespace Money\MoneyPackage\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\JsonResponse;

class MoneyController extends Controller
{
    public function __construct(private BaseMoneyService $baseMoneyService)
    {

    }

    public function show(): JsonResponse
    {
        return response()->json('test', ['int' => $this->baseMoneyService->randomInt()]);
    }
}
