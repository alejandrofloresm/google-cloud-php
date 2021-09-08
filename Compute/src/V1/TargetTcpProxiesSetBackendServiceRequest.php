<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.TargetTcpProxiesSetBackendServiceRequest</code>
 */
class TargetTcpProxiesSetBackendServiceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The URL of the new BackendService resource for the targetTcpProxy.
     *
     * Generated from protobuf field <code>string service = 373540533;</code>
     */
    protected $service = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $service
     *           The URL of the new BackendService resource for the targetTcpProxy.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The URL of the new BackendService resource for the targetTcpProxy.
     *
     * Generated from protobuf field <code>string service = 373540533;</code>
     * @return string
     */
    public function getService()
    {
        return isset($this->service) ? $this->service : '';
    }

    public function hasService()
    {
        return isset($this->service);
    }

    public function clearService()
    {
        unset($this->service);
    }

    /**
     * The URL of the new BackendService resource for the targetTcpProxy.
     *
     * Generated from protobuf field <code>string service = 373540533;</code>
     * @param string $var
     * @return $this
     */
    public function setService($var)
    {
        GPBUtil::checkString($var, True);
        $this->service = $var;

        return $this;
    }

}

