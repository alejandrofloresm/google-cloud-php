<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.Accelerators</code>
 */
class Accelerators extends \Google\Protobuf\Internal\Message
{
    /**
     * Number of accelerator cards exposed to the guest.
     *
     * Generated from protobuf field <code>int32 guest_accelerator_count = 479079316;</code>
     */
    protected $guest_accelerator_count = null;
    /**
     * The accelerator type resource name, not a full URL, e.g. 'nvidia-tesla-k80'.
     *
     * Generated from protobuf field <code>string guest_accelerator_type = 293064725;</code>
     */
    protected $guest_accelerator_type = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $guest_accelerator_count
     *           Number of accelerator cards exposed to the guest.
     *     @type string $guest_accelerator_type
     *           The accelerator type resource name, not a full URL, e.g. 'nvidia-tesla-k80'.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Number of accelerator cards exposed to the guest.
     *
     * Generated from protobuf field <code>int32 guest_accelerator_count = 479079316;</code>
     * @return int
     */
    public function getGuestAcceleratorCount()
    {
        return isset($this->guest_accelerator_count) ? $this->guest_accelerator_count : 0;
    }

    public function hasGuestAcceleratorCount()
    {
        return isset($this->guest_accelerator_count);
    }

    public function clearGuestAcceleratorCount()
    {
        unset($this->guest_accelerator_count);
    }

    /**
     * Number of accelerator cards exposed to the guest.
     *
     * Generated from protobuf field <code>int32 guest_accelerator_count = 479079316;</code>
     * @param int $var
     * @return $this
     */
    public function setGuestAcceleratorCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->guest_accelerator_count = $var;

        return $this;
    }

    /**
     * The accelerator type resource name, not a full URL, e.g. 'nvidia-tesla-k80'.
     *
     * Generated from protobuf field <code>string guest_accelerator_type = 293064725;</code>
     * @return string
     */
    public function getGuestAcceleratorType()
    {
        return isset($this->guest_accelerator_type) ? $this->guest_accelerator_type : '';
    }

    public function hasGuestAcceleratorType()
    {
        return isset($this->guest_accelerator_type);
    }

    public function clearGuestAcceleratorType()
    {
        unset($this->guest_accelerator_type);
    }

    /**
     * The accelerator type resource name, not a full URL, e.g. 'nvidia-tesla-k80'.
     *
     * Generated from protobuf field <code>string guest_accelerator_type = 293064725;</code>
     * @param string $var
     * @return $this
     */
    public function setGuestAcceleratorType($var)
    {
        GPBUtil::checkString($var, True);
        $this->guest_accelerator_type = $var;

        return $this;
    }

}

