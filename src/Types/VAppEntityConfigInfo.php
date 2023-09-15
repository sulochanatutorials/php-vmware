<?php

namespace VmWare\VmWareClient\Types;

use VmWare\VmWareClient\Types\Core\DynamicData;

class VAppEntityConfigInfo extends DynamicData
{
    public $key;

    public $tag;

    public $startOrder;

    public $startDelay;

    public $waitingForGuest;

    public $startAction;

    public $stopDelay;

    public $stopAction;

    public $destroyWithParent;
}
