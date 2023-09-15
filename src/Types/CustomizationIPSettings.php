<?php

namespace VmWare\VmWareClient\Types;

use VmWare\VmWareClient\Types\Core\DynamicData;

class CustomizationIPSettings extends DynamicData
{
    public $ip;

    public $subnetMask;

    public $gateway;

    public $ipV6Spec;

    public $dnsServerList;

    public $dnsDomain;

    public $primaryWINS;

    public $secondaryWINS;

    public $netBIOS;
}
