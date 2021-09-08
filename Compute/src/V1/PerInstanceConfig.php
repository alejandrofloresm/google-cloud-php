<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.PerInstanceConfig</code>
 */
class PerInstanceConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Fingerprint of this per-instance config. This field can be used in optimistic locking. It is ignored when inserting a per-instance config. An up-to-date fingerprint must be provided in order to update an existing per-instance config or the field needs to be unset.
     *
     * Generated from protobuf field <code>string fingerprint = 234678500;</code>
     */
    protected $fingerprint = null;
    /**
     * The name of a per-instance config and its corresponding instance. Serves as a merge key during UpdatePerInstanceConfigs operations, that is, if a per-instance config with the same name exists then it will be updated, otherwise a new one will be created for the VM instance with the same name. An attempt to create a per-instance config for a VM instance that either doesn't exist or is not part of the group will result in an error.
     *
     * Generated from protobuf field <code>string name = 3373707;</code>
     */
    protected $name = null;
    /**
     * The intended preserved state for the given instance. Does not contain preserved state generated from a stateful policy.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.PreservedState preserved_state = 2634026;</code>
     */
    protected $preserved_state = null;
    /**
     * The status of applying this per-instance config on the corresponding managed instance.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.PerInstanceConfig.Status status = 181260274;</code>
     */
    protected $status = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $fingerprint
     *           Fingerprint of this per-instance config. This field can be used in optimistic locking. It is ignored when inserting a per-instance config. An up-to-date fingerprint must be provided in order to update an existing per-instance config or the field needs to be unset.
     *     @type string $name
     *           The name of a per-instance config and its corresponding instance. Serves as a merge key during UpdatePerInstanceConfigs operations, that is, if a per-instance config with the same name exists then it will be updated, otherwise a new one will be created for the VM instance with the same name. An attempt to create a per-instance config for a VM instance that either doesn't exist or is not part of the group will result in an error.
     *     @type \Google\Cloud\Compute\V1\PreservedState $preserved_state
     *           The intended preserved state for the given instance. Does not contain preserved state generated from a stateful policy.
     *     @type int $status
     *           The status of applying this per-instance config on the corresponding managed instance.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Fingerprint of this per-instance config. This field can be used in optimistic locking. It is ignored when inserting a per-instance config. An up-to-date fingerprint must be provided in order to update an existing per-instance config or the field needs to be unset.
     *
     * Generated from protobuf field <code>string fingerprint = 234678500;</code>
     * @return string
     */
    public function getFingerprint()
    {
        return isset($this->fingerprint) ? $this->fingerprint : '';
    }

    public function hasFingerprint()
    {
        return isset($this->fingerprint);
    }

    public function clearFingerprint()
    {
        unset($this->fingerprint);
    }

    /**
     * Fingerprint of this per-instance config. This field can be used in optimistic locking. It is ignored when inserting a per-instance config. An up-to-date fingerprint must be provided in order to update an existing per-instance config or the field needs to be unset.
     *
     * Generated from protobuf field <code>string fingerprint = 234678500;</code>
     * @param string $var
     * @return $this
     */
    public function setFingerprint($var)
    {
        GPBUtil::checkString($var, True);
        $this->fingerprint = $var;

        return $this;
    }

    /**
     * The name of a per-instance config and its corresponding instance. Serves as a merge key during UpdatePerInstanceConfigs operations, that is, if a per-instance config with the same name exists then it will be updated, otherwise a new one will be created for the VM instance with the same name. An attempt to create a per-instance config for a VM instance that either doesn't exist or is not part of the group will result in an error.
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
     * The name of a per-instance config and its corresponding instance. Serves as a merge key during UpdatePerInstanceConfigs operations, that is, if a per-instance config with the same name exists then it will be updated, otherwise a new one will be created for the VM instance with the same name. An attempt to create a per-instance config for a VM instance that either doesn't exist or is not part of the group will result in an error.
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
     * The intended preserved state for the given instance. Does not contain preserved state generated from a stateful policy.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.PreservedState preserved_state = 2634026;</code>
     * @return \Google\Cloud\Compute\V1\PreservedState|null
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
     * The intended preserved state for the given instance. Does not contain preserved state generated from a stateful policy.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.PreservedState preserved_state = 2634026;</code>
     * @param \Google\Cloud\Compute\V1\PreservedState $var
     * @return $this
     */
    public function setPreservedState($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\PreservedState::class);
        $this->preserved_state = $var;

        return $this;
    }

    /**
     * The status of applying this per-instance config on the corresponding managed instance.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.PerInstanceConfig.Status status = 181260274;</code>
     * @return int
     */
    public function getStatus()
    {
        return isset($this->status) ? $this->status : 0;
    }

    public function hasStatus()
    {
        return isset($this->status);
    }

    public function clearStatus()
    {
        unset($this->status);
    }

    /**
     * The status of applying this per-instance config on the corresponding managed instance.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.PerInstanceConfig.Status status = 181260274;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Compute\V1\PerInstanceConfig\Status::class);
        $this->status = $var;

        return $this;
    }

}

