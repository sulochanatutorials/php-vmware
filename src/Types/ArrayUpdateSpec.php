<?php

namespace VmWare\VmWareClient\Types;

use VmWare\VmWareClient\Types\Core\DynamicData;

class ArrayUpdateSpec extends DynamicData
{
    public $operation;

    public $removeKey;
}
