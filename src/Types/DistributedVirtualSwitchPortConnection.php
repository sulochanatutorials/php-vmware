<?php

namespace VmWare\VmWareClient\Types;

use VmWare\VmWareClient\Types\Core\DynamicData;

class DistributedVirtualSwitchPortConnection extends DynamicData
{
    public $switchUuid;

    public $portgroupKey;

    public $portKey;

    public $connectionCookie;
}
