<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for Instances.GetGuestAttributes. See the method description for details.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.GetGuestAttributesInstanceRequest</code>
 */
class GetGuestAttributesInstanceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the instance scoping this request.
     *
     * Generated from protobuf field <code>string instance = 18257045 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $instance = '';
    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $project = '';
    /**
     * Specifies the guest attributes path to be queried.
     *
     * Generated from protobuf field <code>string query_path = 368591164;</code>
     */
    protected $query_path = null;
    /**
     * Specifies the key for the guest attributes entry.
     *
     * Generated from protobuf field <code>string variable_key = 164364828;</code>
     */
    protected $variable_key = null;
    /**
     * The name of the zone for this request.
     *
     * Generated from protobuf field <code>string zone = 3744684 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $zone = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $instance
     *           Name of the instance scoping this request.
     *     @type string $project
     *           Project ID for this request.
     *     @type string $query_path
     *           Specifies the guest attributes path to be queried.
     *     @type string $variable_key
     *           Specifies the key for the guest attributes entry.
     *     @type string $zone
     *           The name of the zone for this request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the instance scoping this request.
     *
     * Generated from protobuf field <code>string instance = 18257045 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * Name of the instance scoping this request.
     *
     * Generated from protobuf field <code>string instance = 18257045 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setInstance($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance = $var;

        return $this;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

    /**
     * Specifies the guest attributes path to be queried.
     *
     * Generated from protobuf field <code>string query_path = 368591164;</code>
     * @return string
     */
    public function getQueryPath()
    {
        return isset($this->query_path) ? $this->query_path : '';
    }

    public function hasQueryPath()
    {
        return isset($this->query_path);
    }

    public function clearQueryPath()
    {
        unset($this->query_path);
    }

    /**
     * Specifies the guest attributes path to be queried.
     *
     * Generated from protobuf field <code>string query_path = 368591164;</code>
     * @param string $var
     * @return $this
     */
    public function setQueryPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->query_path = $var;

        return $this;
    }

    /**
     * Specifies the key for the guest attributes entry.
     *
     * Generated from protobuf field <code>string variable_key = 164364828;</code>
     * @return string
     */
    public function getVariableKey()
    {
        return isset($this->variable_key) ? $this->variable_key : '';
    }

    public function hasVariableKey()
    {
        return isset($this->variable_key);
    }

    public function clearVariableKey()
    {
        unset($this->variable_key);
    }

    /**
     * Specifies the key for the guest attributes entry.
     *
     * Generated from protobuf field <code>string variable_key = 164364828;</code>
     * @param string $var
     * @return $this
     */
    public function setVariableKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->variable_key = $var;

        return $this;
    }

    /**
     * The name of the zone for this request.
     *
     * Generated from protobuf field <code>string zone = 3744684 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * The name of the zone for this request.
     *
     * Generated from protobuf field <code>string zone = 3744684 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->zone = $var;

        return $this;
    }

}

