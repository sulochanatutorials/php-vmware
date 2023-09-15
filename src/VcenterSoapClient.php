<?php

namespace VmWare\VmWareClient;

use SoapClient;
use VmWare\VmWareClient\Data\SoapData;
use VmWare\VmWareClient\Requests\SoapRequest;
use VmWare\VmWareClient\Traits\Soap\SoapGuestApis;
use VmWare\VmWareClient\Traits\Soap\SoapImportApis;
use VmWare\VmWareClient\Traits\Soap\SoapStorageApis;
use VmWare\VmWareClient\Traits\Soap\SoapVmApis;

class VcenterSoapClient
{
    use SoapRequest;
    use SoapVmApis;
    use SoapGuestApis;
    use SoapImportApis;
    use SoapStorageApis;

    public SoapClient $soapClient;

    public SoapData $data;

    public function __construct(SoapClient $soapClient, string $ip)
    {
        $this->soapClient = $soapClient;
        $this->ip = $ip;
        $this->data = new SoapData();
    }
}
