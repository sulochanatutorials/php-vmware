<?php

namespace VmWare\VmWareClient\Types;

class VirtualEthernetCard extends VirtualDevice
{
    public $addressType;

    public $macAddress;

    public $wakeOnLanEnabled;

    public $resourceAllocation;

    public $externalId;

    public $uptCompatibilityEnabled;
}
