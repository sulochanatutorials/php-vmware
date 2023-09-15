<?php

namespace VmWare\VmWareClient\Types;

use VmWare\VmWareClient\Types\Core\DynamicData;

class VirtualMachineFileInfo extends DynamicData
{
    public $vmPathName;

    public $snapshotDirectory;

    public $suspendDirectory;

    public $logDirectory;

    public $ftMetadataDirectory;
}
