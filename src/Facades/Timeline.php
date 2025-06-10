<?php

namespace Bosqro\Timeline\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Bosqro\Timeline\Timeline
 */
class Timeline extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Bosqro\Timeline\Timeline::class;
    }
}
