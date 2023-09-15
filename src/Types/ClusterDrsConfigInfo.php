<?php

namespace VmWare\VmWareClient\Types;

use VmWare\VmWareClient\Types\Core\DynamicData;

class ClusterDrsConfigInfo extends DynamicData
{
    public $enabled;

    public $enableVmBehaviorOverrides;

    public $defaultVmBehavior;

    public $vmotionRate;

    public $scaleDescendantsShares;

    public $option;
}
