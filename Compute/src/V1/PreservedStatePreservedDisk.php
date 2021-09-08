<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.PreservedStatePreservedDisk</code>
 */
class PreservedStatePreservedDisk extends \Google\Protobuf\Internal\Message
{
    /**
     * These stateful disks will never be deleted during autohealing, update, instance recreate operations. This flag is used to configure if the disk should be deleted after it is no longer used by the group, e.g. when the given instance or the whole MIG is deleted. Note: disks attached in READ_ONLY mode cannot be auto-deleted.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.PreservedStatePreservedDisk.AutoDelete auto_delete = 464761403;</code>
     */
    protected $auto_delete = null;
    /**
     * The mode in which to attach this disk, either READ_WRITE or READ_ONLY. If not specified, the default is to attach the disk in READ_WRITE mode.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.PreservedStatePreservedDisk.Mode mode = 3357091;</code>
     */
    protected $mode = null;
    /**
     * The URL of the disk resource that is stateful and should be attached to the VM instance.
     *
     * Generated from protobuf field <code>string source = 177235995;</code>
     */
    protected $source = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $auto_delete
     *           These stateful disks will never be deleted during autohealing, update, instance recreate operations. This flag is used to configure if the disk should be deleted after it is no longer used by the group, e.g. when the given instance or the whole MIG is deleted. Note: disks attached in READ_ONLY mode cannot be auto-deleted.
     *     @type int $mode
     *           The mode in which to attach this disk, either READ_WRITE or READ_ONLY. If not specified, the default is to attach the disk in READ_WRITE mode.
     *     @type string $source
     *           The URL of the disk resource that is stateful and should be attached to the VM instance.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * These stateful disks will never be deleted during autohealing, update, instance recreate operations. This flag is used to configure if the disk should be deleted after it is no longer used by the group, e.g. when the given instance or the whole MIG is deleted. Note: disks attached in READ_ONLY mode cannot be auto-deleted.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.PreservedStatePreservedDisk.AutoDelete auto_delete = 464761403;</code>
     * @return int
     */
    public function getAutoDelete()
    {
        return isset($this->auto_delete) ? $this->auto_delete : 0;
    }

    public function hasAutoDelete()
    {
        return isset($this->auto_delete);
    }

    public function clearAutoDelete()
    {
        unset($this->auto_delete);
    }

    /**
     * These stateful disks will never be deleted during autohealing, update, instance recreate operations. This flag is used to configure if the disk should be deleted after it is no longer used by the group, e.g. when the given instance or the whole MIG is deleted. Note: disks attached in READ_ONLY mode cannot be auto-deleted.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.PreservedStatePreservedDisk.AutoDelete auto_delete = 464761403;</code>
     * @param int $var
     * @return $this
     */
    public function setAutoDelete($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Compute\V1\PreservedStatePreservedDisk\AutoDelete::class);
        $this->auto_delete = $var;

        return $this;
    }

    /**
     * The mode in which to attach this disk, either READ_WRITE or READ_ONLY. If not specified, the default is to attach the disk in READ_WRITE mode.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.PreservedStatePreservedDisk.Mode mode = 3357091;</code>
     * @return int
     */
    public function getMode()
    {
        return isset($this->mode) ? $this->mode : 0;
    }

    public function hasMode()
    {
        return isset($this->mode);
    }

    public function clearMode()
    {
        unset($this->mode);
    }

    /**
     * The mode in which to attach this disk, either READ_WRITE or READ_ONLY. If not specified, the default is to attach the disk in READ_WRITE mode.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.PreservedStatePreservedDisk.Mode mode = 3357091;</code>
     * @param int $var
     * @return $this
     */
    public function setMode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Compute\V1\PreservedStatePreservedDisk\Mode::class);
        $this->mode = $var;

        return $this;
    }

    /**
     * The URL of the disk resource that is stateful and should be attached to the VM instance.
     *
     * Generated from protobuf field <code>string source = 177235995;</code>
     * @return string
     */
    public function getSource()
    {
        return isset($this->source) ? $this->source : '';
    }

    public function hasSource()
    {
        return isset($this->source);
    }

    public function clearSource()
    {
        unset($this->source);
    }

    /**
     * The URL of the disk resource that is stateful and should be attached to the VM instance.
     *
     * Generated from protobuf field <code>string source = 177235995;</code>
     * @param string $var
     * @return $this
     */
    public function setSource($var)
    {
        GPBUtil::checkString($var, True);
        $this->source = $var;

        return $this;
    }

}

