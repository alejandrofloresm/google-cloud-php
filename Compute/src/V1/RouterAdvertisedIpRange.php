<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Description-tagged IP ranges for the router to advertise.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.RouterAdvertisedIpRange</code>
 */
class RouterAdvertisedIpRange extends \Google\Protobuf\Internal\Message
{
    /**
     * User-specified description for the IP range.
     *
     * Generated from protobuf field <code>string description = 422937596;</code>
     */
    protected $description = null;
    /**
     * The IP range to advertise. The value must be a CIDR-formatted string.
     *
     * Generated from protobuf field <code>string range = 108280125;</code>
     */
    protected $range = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $description
     *           User-specified description for the IP range.
     *     @type string $range
     *           The IP range to advertise. The value must be a CIDR-formatted string.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * User-specified description for the IP range.
     *
     * Generated from protobuf field <code>string description = 422937596;</code>
     * @return string
     */
    public function getDescription()
    {
        return isset($this->description) ? $this->description : '';
    }

    public function hasDescription()
    {
        return isset($this->description);
    }

    public function clearDescription()
    {
        unset($this->description);
    }

    /**
     * User-specified description for the IP range.
     *
     * Generated from protobuf field <code>string description = 422937596;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * The IP range to advertise. The value must be a CIDR-formatted string.
     *
     * Generated from protobuf field <code>string range = 108280125;</code>
     * @return string
     */
    public function getRange()
    {
        return isset($this->range) ? $this->range : '';
    }

    public function hasRange()
    {
        return isset($this->range);
    }

    public function clearRange()
    {
        unset($this->range);
    }

    /**
     * The IP range to advertise. The value must be a CIDR-formatted string.
     *
     * Generated from protobuf field <code>string range = 108280125;</code>
     * @param string $var
     * @return $this
     */
    public function setRange($var)
    {
        GPBUtil::checkString($var, True);
        $this->range = $var;

        return $this;
    }

}

