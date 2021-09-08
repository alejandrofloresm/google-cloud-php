<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration for a Cloud Function network endpoint group (NEG). The function must be provided explicitly or in the URL mask.
 * Note: Cloud Function must be in the same project and located in the same region as the Serverless NEG.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.NetworkEndpointGroupCloudFunction</code>
 */
class NetworkEndpointGroupCloudFunction extends \Google\Protobuf\Internal\Message
{
    /**
     * A user-defined name of the Cloud Function.
     * The function name is case-sensitive and must be 1-63 characters long.
     * Example value: "func1".
     *
     * Generated from protobuf field <code>string function = 307196888;</code>
     */
    protected $function = null;
    /**
     * A template to parse function field from a request URL. URL mask allows for routing to multiple Cloud Functions without having to create multiple Network Endpoint Groups and backend services.
     * For example, request URLs "mydomain.com/function1" and "mydomain.com/function2" can be backed by the same Serverless NEG with URL mask "/". The URL mask will parse them to { function = "function1" } and { function = "function2" } respectively.
     *
     * Generated from protobuf field <code>string url_mask = 103352252;</code>
     */
    protected $url_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $function
     *           A user-defined name of the Cloud Function.
     *           The function name is case-sensitive and must be 1-63 characters long.
     *           Example value: "func1".
     *     @type string $url_mask
     *           A template to parse function field from a request URL. URL mask allows for routing to multiple Cloud Functions without having to create multiple Network Endpoint Groups and backend services.
     *           For example, request URLs "mydomain.com/function1" and "mydomain.com/function2" can be backed by the same Serverless NEG with URL mask "/". The URL mask will parse them to { function = "function1" } and { function = "function2" } respectively.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * A user-defined name of the Cloud Function.
     * The function name is case-sensitive and must be 1-63 characters long.
     * Example value: "func1".
     *
     * Generated from protobuf field <code>string function = 307196888;</code>
     * @return string
     */
    public function getFunction()
    {
        return isset($this->function) ? $this->function : '';
    }

    public function hasFunction()
    {
        return isset($this->function);
    }

    public function clearFunction()
    {
        unset($this->function);
    }

    /**
     * A user-defined name of the Cloud Function.
     * The function name is case-sensitive and must be 1-63 characters long.
     * Example value: "func1".
     *
     * Generated from protobuf field <code>string function = 307196888;</code>
     * @param string $var
     * @return $this
     */
    public function setFunction($var)
    {
        GPBUtil::checkString($var, True);
        $this->function = $var;

        return $this;
    }

    /**
     * A template to parse function field from a request URL. URL mask allows for routing to multiple Cloud Functions without having to create multiple Network Endpoint Groups and backend services.
     * For example, request URLs "mydomain.com/function1" and "mydomain.com/function2" can be backed by the same Serverless NEG with URL mask "/". The URL mask will parse them to { function = "function1" } and { function = "function2" } respectively.
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
     * A template to parse function field from a request URL. URL mask allows for routing to multiple Cloud Functions without having to create multiple Network Endpoint Groups and backend services.
     * For example, request URLs "mydomain.com/function1" and "mydomain.com/function2" can be backed by the same Serverless NEG with URL mask "/". The URL mask will parse them to { function = "function1" } and { function = "function2" } respectively.
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

}

