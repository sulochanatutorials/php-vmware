<?php

namespace VmWare\VmWareClient\Types;

use VmWare\VmWareClient\Types\Core\DynamicData;

class VirtualDevice extends DynamicData
{
    public $key;

    public $deviceInfo;

    public $backing;

    public $connectable;

    public $slotInfo;

    public $controllerKey;

    public $unitNumber;

    public $numaNode;

    public $deviceGroupInfo;
}
