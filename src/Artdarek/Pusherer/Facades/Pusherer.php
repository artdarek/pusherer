<?php namespace Artdarek\Pusherer\Facades;

use Illuminate\Support\Facades\Facade;

class Pusherer extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'pusherer'; }

}