<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.LicenseResourceRequirements</code>
 */
class LicenseResourceRequirements extends \Google\Protobuf\Internal\Message
{
    /**
     * Minimum number of guest cpus required to use the Instance. Enforced at Instance creation and Instance start.
     *
     * Generated from protobuf field <code>int32 min_guest_cpu_count = 477964836;</code>
     */
    protected $min_guest_cpu_count = null;
    /**
     * Minimum memory required to use the Instance. Enforced at Instance creation and Instance start.
     *
     * Generated from protobuf field <code>int32 min_memory_mb = 504785894;</code>
     */
    protected $min_memory_mb = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $min_guest_cpu_count
     *           Minimum number of guest cpus required to use the Instance. Enforced at Instance creation and Instance start.
     *     @type int $min_memory_mb
     *           Minimum memory required to use the Instance. Enforced at Instance creation and Instance start.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Minimum number of guest cpus required to use the Instance. Enforced at Instance creation and Instance start.
     *
     * Generated from protobuf field <code>int32 min_guest_cpu_count = 477964836;</code>
     * @return int
     */
    public function getMinGuestCpuCount()
    {
        return isset($this->min_guest_cpu_count) ? $this->min_guest_cpu_count : 0;
    }

    public function hasMinGuestCpuCount()
    {
        return isset($this->min_guest_cpu_count);
    }

    public function clearMinGuestCpuCount()
    {
        unset($this->min_guest_cpu_count);
    }

    /**
     * Minimum number of guest cpus required to use the Instance. Enforced at Instance creation and Instance start.
     *
     * Generated from protobuf field <code>int32 min_guest_cpu_count = 477964836;</code>
     * @param int $var
     * @return $this
     */
    public function setMinGuestCpuCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->min_guest_cpu_count = $var;

        return $this;
    }

    /**
     * Minimum memory required to use the Instance. Enforced at Instance creation and Instance start.
     *
     * Generated from protobuf field <code>int32 min_memory_mb = 504785894;</code>
     * @return int
     */
    public function getMinMemoryMb()
    {
        return isset($this->min_memory_mb) ? $this->min_memory_mb : 0;
    }

    public function hasMinMemoryMb()
    {
        return isset($this->min_memory_mb);
    }

    public function clearMinMemoryMb()
    {
        unset($this->min_memory_mb);
    }

    /**
     * Minimum memory required to use the Instance. Enforced at Instance creation and Instance start.
     *
     * Generated from protobuf field <code>int32 min_memory_mb = 504785894;</code>
     * @param int $var
     * @return $this
     */
    public function setMinMemoryMb($var)
    {
        GPBUtil::checkInt32($var);
        $this->min_memory_mb = $var;

        return $this;
    }

}

