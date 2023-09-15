<?php

namespace VmWare\VmWareClient\Types;

use VmWare\VmWareClient\Types\Core\DynamicData;

class ComputeResourceConfigSpec extends DynamicData
{
    public $vmSwapPlacement;

    public $spbmEnabled;

    public $defaultHardwareVersionKey;

    public $desiredSoftwareSpec;
}
