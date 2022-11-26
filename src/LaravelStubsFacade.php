<?php

namespace Amirhf\LaravelStubs;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Amirhf\LaravelStubs\Skeleton\SkeletonClass
 */
class LaravelStubsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-stubs';
    }
}
