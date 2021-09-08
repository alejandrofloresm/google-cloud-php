<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Bypass the cache when the specified request headers are present, e.g. Pragma or Authorization headers. Values are case insensitive. The presence of such a header overrides the cache_mode setting.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.BackendBucketCdnPolicyBypassCacheOnRequestHeader</code>
 */
class BackendBucketCdnPolicyBypassCacheOnRequestHeader extends \Google\Protobuf\Internal\Message
{
    /**
     * The header field name to match on when bypassing cache. Values are case-insensitive.
     *
     * Generated from protobuf field <code>string header_name = 110223613;</code>
     */
    protected $header_name = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $header_name
     *           The header field name to match on when bypassing cache. Values are case-insensitive.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The header field name to match on when bypassing cache. Values are case-insensitive.
     *
     * Generated from protobuf field <code>string header_name = 110223613;</code>
     * @return string
     */
    public function getHeaderName()
    {
        return isset($this->header_name) ? $this->header_name : '';
    }

    public function hasHeaderName()
    {
        return isset($this->header_name);
    }

    public function clearHeaderName()
    {
        unset($this->header_name);
    }

    /**
     * The header field name to match on when bypassing cache. Values are case-insensitive.
     *
     * Generated from protobuf field <code>string header_name = 110223613;</code>
     * @param string $var
     * @return $this
     */
    public function setHeaderName($var)
    {
        GPBUtil::checkString($var, True);
        $this->header_name = $var;

        return $this;
    }

}

