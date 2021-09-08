<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.StatefulPolicy</code>
 */
class StatefulPolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.StatefulPolicyPreservedState preserved_state = 2634026;</code>
     */
    protected $preserved_state = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Compute\V1\StatefulPolicyPreservedState $preserved_state
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.StatefulPolicyPreservedState preserved_state = 2634026;</code>
     * @return \Google\Cloud\Compute\V1\StatefulPolicyPreservedState|null
     */
    public function getPreservedState()
    {
        return isset($this->preserved_state) ? $this->preserved_state : null;
    }

    public function hasPreservedState()
    {
        return isset($this->preserved_state);
    }

    public function clearPreservedState()
    {
        unset($this->preserved_state);
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.StatefulPolicyPreservedState preserved_state = 2634026;</code>
     * @param \Google\Cloud\Compute\V1\StatefulPolicyPreservedState $var
     * @return $this
     */
    public function setPreservedState($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\StatefulPolicyPreservedState::class);
        $this->preserved_state = $var;

        return $this;
    }

}

