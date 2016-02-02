<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 2/1/16
 * Time: 3:26 PM
 */

namespace Kevin\Xinge\Facades;

use Illuminate\Support\Facades\Facade;

class Xinge extends Facade {

    protected static function getFacadeAccessor()
    {
        return 'xinge';
    }

}