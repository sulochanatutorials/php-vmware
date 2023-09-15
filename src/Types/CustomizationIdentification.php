<?php

namespace VmWare\VmWareClient\Types;

use VmWare\VmWareClient\Types\Core\DynamicData;

class CustomizationIdentification extends DynamicData
{
    public $joinWorkgroup;

    public $joinDomain;

    public $domainAdmin;

    public $domainAdminPassword;
}
