<?php

namespace VmWare\VmWareClient\Types;

use VmWare\VmWareClient\Types\Core\DynamicData;

class VirtualDeviceConfigSpec extends DynamicData
{
    public $operation;

    public $fileOperation;

    public $device;

    public $profile;

    public $backing;
}
