<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration for an App Engine network endpoint group (NEG). The service is optional, may be provided explicitly or in the URL mask. The version is optional and can only be provided explicitly or in the URL mask when service is present.
 * Note: App Engine service must be in the same project and located in the same region as the Serverless NEG.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.NetworkEndpointGroupAppEngine</code>
 */
class NetworkEndpointGroupAppEngine extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional serving service.
     * The service name is case-sensitive and must be 1-63 characters long.
     * Example value: "default", "my-service".
     *
     * Generated from protobuf field <code>string service = 373540533;</code>
     */
    protected $service = null;
    /**
     * A template to parse service and version fields from a request URL. URL mask allows for routing to multiple App Engine services without having to create multiple Network Endpoint Groups and backend services.
     * For example, the request URLs "foo1-dot-appname.appspot.com/v1" and "foo1-dot-appname.appspot.com/v2" can be backed by the same Serverless NEG with URL mask "-dot-appname.appspot.com/". The URL mask will parse them to { service = "foo1", version = "v1" } and { service = "foo1", version = "v2" } respectively.
     *
     * Generated from protobuf field <code>string url_mask = 103352252;</code>
     */
    protected $url_mask = null;
    /**
     * Optional serving version.
     * The version name is case-sensitive and must be 1-100 characters long.
     * Example value: "v1", "v2".
     *
     * Generated from protobuf field <code>string version = 351608024;</code>
     */
    protected $version = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $service
     *           Optional serving service.
     *           The service name is case-sensitive and must be 1-63 characters long.
     *           Example value: "default", "my-service".
     *     @type string $url_mask
     *           A template to parse service and version fields from a request URL. URL mask allows for routing to multiple App Engine services without having to create multiple Network Endpoint Groups and backend services.
     *           For example, the request URLs "foo1-dot-appname.appspot.com/v1" and "foo1-dot-appname.appspot.com/v2" can be backed by the same Serverless NEG with URL mask "-dot-appname.appspot.com/". The URL mask will parse them to { service = "foo1", version = "v1" } and { service = "foo1", version = "v2" } respectively.
     *     @type string $version
     *           Optional serving version.
     *           The version name is case-sensitive and must be 1-100 characters long.
     *           Example value: "v1", "v2".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional serving service.
     * The service name is case-sensitive and must be 1-63 characters long.
     * Example value: "default", "my-service".
     *
     * Generated from protobuf field <code>string service = 373540533;</code>
     * @return string
     */
    public function getService()
    {
        return isset($this->service) ? $this->service : '';
    }

    public function hasService()
    {
        return isset($this->service);
    }

    public function clearService()
    {
        unset($this->service);
    }

    /**
     * Optional serving service.
     * The service name is case-sensitive and must be 1-63 characters long.
     * Example value: "default", "my-service".
     *
     * Generated from protobuf field <code>string service = 373540533;</code>
     * @param string $var
     * @return $this
     */
    public function setService($var)
    {
        GPBUtil::checkString($var, True);
        $this->service = $var;

        return $this;
    }

    /**
     * A template to parse service and version fields from a request URL. URL mask allows for routing to multiple App Engine services without having to create multiple Network Endpoint Groups and backend services.
     * For example, the request URLs "foo1-dot-appname.appspot.com/v1" and "foo1-dot-appname.appspot.com/v2" can be backed by the same Serverless NEG with URL mask "-dot-appname.appspot.com/". The URL mask will parse them to { service = "foo1", version = "v1" } and { service = "foo1", version = "v2" } respectively.
     *
     * Generated from protobuf field <code>string url_mask = 103352252;</code>
     * @return string
     */
    public function getUrlMask()
    {
        return isset($this->url_mask) ? $this->url_mask : '';
    }

    public function hasUrlMask()
    {
        return isset($this->url_mask);
    }

    public function clearUrlMask()
    {
        unset($this->url_mask);
    }

    /**
     * A template to parse service and version fields from a request URL. URL mask allows for routing to multiple App Engine services without having to create multiple Network Endpoint Groups and backend services.
     * For example, the request URLs "foo1-dot-appname.appspot.com/v1" and "foo1-dot-appname.appspot.com/v2" can be backed by the same Serverless NEG with URL mask "-dot-appname.appspot.com/". The URL mask will parse them to { service = "foo1", version = "v1" } and { service = "foo1", version = "v2" } respectively.
     *
     * Generated from protobuf field <code>string url_mask = 103352252;</code>
     * @param string $var
     * @return $this
     */
    public function setUrlMask($var)
    {
        GPBUtil::checkString($var, True);
        $this->url_mask = $var;

        return $this;
    }

    /**
     * Optional serving version.
     * The version name is case-sensitive and must be 1-100 characters long.
     * Example value: "v1", "v2".
     *
     * Generated from protobuf field <code>string version = 351608024;</code>
     * @return string
     */
    public function getVersion()
    {
        return isset($this->version) ? $this->version : '';
    }

    public function hasVersion()
    {
        return isset($this->version);
    }

    public function clearVersion()
    {
        unset($this->version);
    }

    /**
     * Optional serving version.
     * The version name is case-sensitive and must be 1-100 characters long.
     * Example value: "v1", "v2".
     *
     * Generated from protobuf field <code>string version = 351608024;</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;

        return $this;
    }

}

