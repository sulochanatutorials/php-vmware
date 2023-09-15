<?php

namespace VmWare\VmWareClient\Types;

use VmWare\VmWareClient\Types\Core\DynamicData;

class ClusterDpmConfigInfo extends DynamicData
{
    public $enabled;

    public $defaultDpmBehavior;

    public $hostPowerActionRate;

    public $option;
}
