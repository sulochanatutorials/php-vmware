<?php

namespace VmWare\VmWareClient\Types;

use VmWare\VmWareClient\Types\Core\DynamicData;

class InheritablePolicy extends DynamicData
{
    public bool $inherited = false;
}
