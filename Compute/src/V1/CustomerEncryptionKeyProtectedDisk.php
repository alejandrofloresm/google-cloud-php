<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.CustomerEncryptionKeyProtectedDisk</code>
 */
class CustomerEncryptionKeyProtectedDisk extends \Google\Protobuf\Internal\Message
{
    /**
     * Decrypts data associated with the disk with a customer-supplied encryption key.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.CustomerEncryptionKey disk_encryption_key = 271660677;</code>
     */
    protected $disk_encryption_key = null;
    /**
     * Specifies a valid partial or full URL to an existing Persistent Disk resource. This field is only applicable for persistent disks.
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
     *     @type \Google\Cloud\Compute\V1\CustomerEncryptionKey $disk_encryption_key
     *           Decrypts data associated with the disk with a customer-supplied encryption key.
     *     @type string $source
     *           Specifies a valid partial or full URL to an existing Persistent Disk resource. This field is only applicable for persistent disks.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Decrypts data associated with the disk with a customer-supplied encryption key.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.CustomerEncryptionKey disk_encryption_key = 271660677;</code>
     * @return \Google\Cloud\Compute\V1\CustomerEncryptionKey|null
     */
    public function getDiskEncryptionKey()
    {
        return isset($this->disk_encryption_key) ? $this->disk_encryption_key : null;
    }

    public function hasDiskEncryptionKey()
    {
        return isset($this->disk_encryption_key);
    }

    public function clearDiskEncryptionKey()
    {
        unset($this->disk_encryption_key);
    }

    /**
     * Decrypts data associated with the disk with a customer-supplied encryption key.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.CustomerEncryptionKey disk_encryption_key = 271660677;</code>
     * @param \Google\Cloud\Compute\V1\CustomerEncryptionKey $var
     * @return $this
     */
    public function setDiskEncryptionKey($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\CustomerEncryptionKey::class);
        $this->disk_encryption_key = $var;

        return $this;
    }

    /**
     * Specifies a valid partial or full URL to an existing Persistent Disk resource. This field is only applicable for persistent disks.
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
     * Specifies a valid partial or full URL to an existing Persistent Disk resource. This field is only applicable for persistent disks.
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

