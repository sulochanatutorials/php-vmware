<?php

namespace VmWare\VmWareClient\Types;

use VmWare\VmWareClient\Types\Core\DynamicData;

class CustomizationGuiUnattended extends DynamicData
{
    public $password;

    public $timeZone;

    public $autoLogon;

    public $autoLogonCount;
}
