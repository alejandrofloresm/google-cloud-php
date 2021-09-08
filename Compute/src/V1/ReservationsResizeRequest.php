<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.ReservationsResizeRequest</code>
 */
class ReservationsResizeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Number of allocated resources can be resized with minimum = 1 and maximum = 1000.
     *
     * Generated from protobuf field <code>int64 specific_sku_count = 13890720;</code>
     */
    protected $specific_sku_count = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $specific_sku_count
     *           Number of allocated resources can be resized with minimum = 1 and maximum = 1000.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Number of allocated resources can be resized with minimum = 1 and maximum = 1000.
     *
     * Generated from protobuf field <code>int64 specific_sku_count = 13890720;</code>
     * @return int|string
     */
    public function getSpecificSkuCount()
    {
        return isset($this->specific_sku_count) ? $this->specific_sku_count : 0;
    }

    public function hasSpecificSkuCount()
    {
        return isset($this->specific_sku_count);
    }

    public function clearSpecificSkuCount()
    {
        unset($this->specific_sku_count);
    }

    /**
     * Number of allocated resources can be resized with minimum = 1 and maximum = 1000.
     *
     * Generated from protobuf field <code>int64 specific_sku_count = 13890720;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSpecificSkuCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->specific_sku_count = $var;

        return $this;
    }

}

