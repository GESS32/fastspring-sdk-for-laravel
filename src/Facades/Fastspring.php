<?php

declare(strict_types=1);

namespace Gess32\FastspringSdk\Facades;

use Illuminate\Support\Facades\Facade;

class Fastspring extends Facade
{
    public static function getFacadeAccessor(): string
    {
        return FastspringFacadeAccessor::class;
    }
}
