<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A metadata key/value entry.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.Metadata</code>
 */
class Metadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Specifies a fingerprint for this request, which is essentially a hash of the metadata's contents and used for optimistic locking. The fingerprint is initially generated by Compute Engine and changes after every request to modify or update metadata. You must always provide an up-to-date fingerprint hash in order to update or change metadata, otherwise the request will fail with error 412 conditionNotMet.
     * To see the latest fingerprint, make a get() request to retrieve the resource.
     *
     * Generated from protobuf field <code>string fingerprint = 234678500;</code>
     */
    protected $fingerprint = null;
    /**
     * Array of key/value pairs. The total size of all keys and values must be less than 512 KB.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.Items items = 100526016;</code>
     */
    private $items;
    /**
     * [Output Only] Type of the resource. Always compute#metadata for metadata.
     *
     * Generated from protobuf field <code>string kind = 3292052;</code>
     */
    protected $kind = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $fingerprint
     *           Specifies a fingerprint for this request, which is essentially a hash of the metadata's contents and used for optimistic locking. The fingerprint is initially generated by Compute Engine and changes after every request to modify or update metadata. You must always provide an up-to-date fingerprint hash in order to update or change metadata, otherwise the request will fail with error 412 conditionNotMet.
     *           To see the latest fingerprint, make a get() request to retrieve the resource.
     *     @type \Google\Cloud\Compute\V1\Items[]|\Google\Protobuf\Internal\RepeatedField $items
     *           Array of key/value pairs. The total size of all keys and values must be less than 512 KB.
     *     @type string $kind
     *           [Output Only] Type of the resource. Always compute#metadata for metadata.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Specifies a fingerprint for this request, which is essentially a hash of the metadata's contents and used for optimistic locking. The fingerprint is initially generated by Compute Engine and changes after every request to modify or update metadata. You must always provide an up-to-date fingerprint hash in order to update or change metadata, otherwise the request will fail with error 412 conditionNotMet.
     * To see the latest fingerprint, make a get() request to retrieve the resource.
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
     * Specifies a fingerprint for this request, which is essentially a hash of the metadata's contents and used for optimistic locking. The fingerprint is initially generated by Compute Engine and changes after every request to modify or update metadata. You must always provide an up-to-date fingerprint hash in order to update or change metadata, otherwise the request will fail with error 412 conditionNotMet.
     * To see the latest fingerprint, make a get() request to retrieve the resource.
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
     * Array of key/value pairs. The total size of all keys and values must be less than 512 KB.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.Items items = 100526016;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Array of key/value pairs. The total size of all keys and values must be less than 512 KB.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.Items items = 100526016;</code>
     * @param \Google\Cloud\Compute\V1\Items[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setItems($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\Items::class);
        $this->items = $arr;

        return $this;
    }

    /**
     * [Output Only] Type of the resource. Always compute#metadata for metadata.
     *
     * Generated from protobuf field <code>string kind = 3292052;</code>
     * @return string
     */
    public function getKind()
    {
        return isset($this->kind) ? $this->kind : '';
    }

    public function hasKind()
    {
        return isset($this->kind);
    }

    public function clearKind()
    {
        unset($this->kind);
    }

    /**
     * [Output Only] Type of the resource. Always compute#metadata for metadata.
     *
     * Generated from protobuf field <code>string kind = 3292052;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

}

