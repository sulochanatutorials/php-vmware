<?php

namespace VmWare\VmWareClient\Types;

class DVSTrafficShapingPolicy extends InheritablePolicy
{
    public $enabled;

    public $averageBandwidth;

    public $peakBandwidth;

    public $burstSize;
}
