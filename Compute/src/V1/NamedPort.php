<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The named port. For example: .
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.NamedPort</code>
 */
class NamedPort extends \Google\Protobuf\Internal\Message
{
    /**
     * The name for this named port. The name must be 1-63 characters long, and comply with RFC1035.
     *
     * Generated from protobuf field <code>string name = 3373707;</code>
     */
    protected $name = null;
    /**
     * The port number, which can be a value between 1 and 65535.
     *
     * Generated from protobuf field <code>int32 port = 3446913;</code>
     */
    protected $port = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The name for this named port. The name must be 1-63 characters long, and comply with RFC1035.
     *     @type int $port
     *           The port number, which can be a value between 1 and 65535.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The name for this named port. The name must be 1-63 characters long, and comply with RFC1035.
     *
     * Generated from protobuf field <code>string name = 3373707;</code>
     * @return string
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : '';
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * The name for this named port. The name must be 1-63 characters long, and comply with RFC1035.
     *
     * Generated from protobuf field <code>string name = 3373707;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The port number, which can be a value between 1 and 65535.
     *
     * Generated from protobuf field <code>int32 port = 3446913;</code>
     * @return int
     */
    public function getPort()
    {
        return isset($this->port) ? $this->port : 0;
    }

    public function hasPort()
    {
        return isset($this->port);
    }

    public function clearPort()
    {
        unset($this->port);
    }

    /**
     * The port number, which can be a value between 1 and 65535.
     *
     * Generated from protobuf field <code>int32 port = 3446913;</code>
     * @param int $var
     * @return $this
     */
    public function setPort($var)
    {
        GPBUtil::checkInt32($var);
        $this->port = $var;

        return $this;
    }

}

