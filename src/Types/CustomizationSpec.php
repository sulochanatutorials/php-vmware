<?php

namespace VmWare\VmWareClient\Types;

use VmWare\VmWareClient\Types\Core\DynamicData;

class CustomizationSpec extends DynamicData
{
    public $options;

    public $identity;

    public $globalIPSettings;

    public $nicSettingMap;

    public $encryptionKey;
}
