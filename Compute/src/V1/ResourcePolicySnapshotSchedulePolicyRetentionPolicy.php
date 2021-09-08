<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Policy for retention of scheduled snapshots.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.ResourcePolicySnapshotSchedulePolicyRetentionPolicy</code>
 */
class ResourcePolicySnapshotSchedulePolicyRetentionPolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * Maximum age of the snapshot that is allowed to be kept.
     *
     * Generated from protobuf field <code>int32 max_retention_days = 324296979;</code>
     */
    protected $max_retention_days = null;
    /**
     * Specifies the behavior to apply to scheduled snapshots when the source disk is deleted.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.ResourcePolicySnapshotSchedulePolicyRetentionPolicy.OnSourceDiskDelete on_source_disk_delete = 321955529;</code>
     */
    protected $on_source_disk_delete = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $max_retention_days
     *           Maximum age of the snapshot that is allowed to be kept.
     *     @type int $on_source_disk_delete
     *           Specifies the behavior to apply to scheduled snapshots when the source disk is deleted.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Maximum age of the snapshot that is allowed to be kept.
     *
     * Generated from protobuf field <code>int32 max_retention_days = 324296979;</code>
     * @return int
     */
    public function getMaxRetentionDays()
    {
        return isset($this->max_retention_days) ? $this->max_retention_days : 0;
    }

    public function hasMaxRetentionDays()
    {
        return isset($this->max_retention_days);
    }

    public function clearMaxRetentionDays()
    {
        unset($this->max_retention_days);
    }

    /**
     * Maximum age of the snapshot that is allowed to be kept.
     *
     * Generated from protobuf field <code>int32 max_retention_days = 324296979;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxRetentionDays($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_retention_days = $var;

        return $this;
    }

    /**
     * Specifies the behavior to apply to scheduled snapshots when the source disk is deleted.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.ResourcePolicySnapshotSchedulePolicyRetentionPolicy.OnSourceDiskDelete on_source_disk_delete = 321955529;</code>
     * @return int
     */
    public function getOnSourceDiskDelete()
    {
        return isset($this->on_source_disk_delete) ? $this->on_source_disk_delete : 0;
    }

    public function hasOnSourceDiskDelete()
    {
        return isset($this->on_source_disk_delete);
    }

    public function clearOnSourceDiskDelete()
    {
        unset($this->on_source_disk_delete);
    }

    /**
     * Specifies the behavior to apply to scheduled snapshots when the source disk is deleted.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.ResourcePolicySnapshotSchedulePolicyRetentionPolicy.OnSourceDiskDelete on_source_disk_delete = 321955529;</code>
     * @param int $var
     * @return $this
     */
    public function setOnSourceDiskDelete($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Compute\V1\ResourcePolicySnapshotSchedulePolicyRetentionPolicy\OnSourceDiskDelete::class);
        $this->on_source_disk_delete = $var;

        return $this;
    }

}

