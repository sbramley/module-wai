<?php

namespace TMS\Common\Facades;

use Illuminate\Support\Facades\Facade;

class Common extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'common';
    }
}
