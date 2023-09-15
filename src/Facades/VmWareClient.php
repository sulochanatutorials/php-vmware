<?php

namespace VmWare\VmWareClient\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \VmWare\VmWareClient\VmWareClientInit
 */
class VmWareClient extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'vmware-php-client';
    }
}
