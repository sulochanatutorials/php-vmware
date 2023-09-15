<?php

namespace VmWare\VmWareClient\Types;

use VmWare\VmWareClient\Types\Core\DynamicData;

class VirtualDeviceConnectInfo extends DynamicData
{
    public $migrateConnect;

    public $startConnected;

    public $allowGuestControl;

    public $connected;

    public $status;
}
