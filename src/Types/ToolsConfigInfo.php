<?php

namespace VmWare\VmWareClient\Types;

use VmWare\VmWareClient\Types\Core\DynamicData;

class ToolsConfigInfo extends DynamicData
{
    public $toolsVersion;

    public $toolsInstallType;

    public $afterPowerOn;

    public $afterResume;

    public $beforeGuestStandby;

    public $beforeGuestShutdown;

    public $beforeGuestReboot;

    public $toolsUpgradePolicy;

    public $pendingCustomization;

    public $customizationKeyId;

    public $syncTimeWithHostAllowed;

    public $syncTimeWithHost;

    public $lastInstallInfo;
}
