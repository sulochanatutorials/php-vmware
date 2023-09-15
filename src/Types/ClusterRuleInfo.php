<?php

namespace VmWare\VmWareClient\Types;

use VmWare\VmWareClient\Types\Core\DynamicData;

class ClusterRuleInfo extends DynamicData
{
    public $key;

    public $status;

    public $enabled;

    public $name;

    public $mandatory;

    public $userCreated;

    public $inCompliance;

    public $ruleUuid;
}
