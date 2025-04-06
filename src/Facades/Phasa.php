<?php

namespace Zupaazhai\Phasa\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Zupaazhai\Phasa\Phasa
 */
class Phasa extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Zupaazhai\Phasa\Phasa::class;
    }
}
