<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The retry policy associates with HttpRouteRule
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.HttpRetryPolicy</code>
 */
class HttpRetryPolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * Specifies the allowed number retries. This number must be > 0. If not specified, defaults to 1.
     *
     * Generated from protobuf field <code>uint32 num_retries = 251680141;</code>
     */
    protected $num_retries = null;
    /**
     * Specifies a non-zero timeout per retry attempt.
     * If not specified, will use the timeout set in HttpRouteAction. If timeout in HttpRouteAction is not set, will use the largest timeout among all backend services associated with the route.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Duration per_try_timeout = 280041147;</code>
     */
    protected $per_try_timeout = null;
    /**
     * Specfies one or more conditions when this retry rule applies. Valid values are:
     * - 5xx: Loadbalancer will attempt a retry if the backend service responds with any 5xx response code, or if the backend service does not respond at all, example: disconnects, reset, read timeout, connection failure, and refused streams.
     * - gateway-error: Similar to 5xx, but only applies to response codes 502, 503 or 504.
     * -
     * - connect-failure: Loadbalancer will retry on failures connecting to backend services, for example due to connection timeouts.
     * - retriable-4xx: Loadbalancer will retry for retriable 4xx response codes. Currently the only retriable error supported is 409.
     * - refused-stream:Loadbalancer will retry if the backend service resets the stream with a REFUSED_STREAM error code. This reset type indicates that it is safe to retry.
     * - cancelledLoadbalancer will retry if the gRPC status code in the response header is set to cancelled
     * - deadline-exceeded: Loadbalancer will retry if the gRPC status code in the response header is set to deadline-exceeded
     * - resource-exhausted: Loadbalancer will retry if the gRPC status code in the response header is set to resource-exhausted
     * - unavailable: Loadbalancer will retry if the gRPC status code in the response header is set to unavailable
     *
     * Generated from protobuf field <code>repeated string retry_conditions = 28815535;</code>
     */
    private $retry_conditions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $num_retries
     *           Specifies the allowed number retries. This number must be > 0. If not specified, defaults to 1.
     *     @type \Google\Cloud\Compute\V1\Duration $per_try_timeout
     *           Specifies a non-zero timeout per retry attempt.
     *           If not specified, will use the timeout set in HttpRouteAction. If timeout in HttpRouteAction is not set, will use the largest timeout among all backend services associated with the route.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $retry_conditions
     *           Specfies one or more conditions when this retry rule applies. Valid values are:
     *           - 5xx: Loadbalancer will attempt a retry if the backend service responds with any 5xx response code, or if the backend service does not respond at all, example: disconnects, reset, read timeout, connection failure, and refused streams.
     *           - gateway-error: Similar to 5xx, but only applies to response codes 502, 503 or 504.
     *           -
     *           - connect-failure: Loadbalancer will retry on failures connecting to backend services, for example due to connection timeouts.
     *           - retriable-4xx: Loadbalancer will retry for retriable 4xx response codes. Currently the only retriable error supported is 409.
     *           - refused-stream:Loadbalancer will retry if the backend service resets the stream with a REFUSED_STREAM error code. This reset type indicates that it is safe to retry.
     *           - cancelledLoadbalancer will retry if the gRPC status code in the response header is set to cancelled
     *           - deadline-exceeded: Loadbalancer will retry if the gRPC status code in the response header is set to deadline-exceeded
     *           - resource-exhausted: Loadbalancer will retry if the gRPC status code in the response header is set to resource-exhausted
     *           - unavailable: Loadbalancer will retry if the gRPC status code in the response header is set to unavailable
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Specifies the allowed number retries. This number must be > 0. If not specified, defaults to 1.
     *
     * Generated from protobuf field <code>uint32 num_retries = 251680141;</code>
     * @return int
     */
    public function getNumRetries()
    {
        return isset($this->num_retries) ? $this->num_retries : 0;
    }

    public function hasNumRetries()
    {
        return isset($this->num_retries);
    }

    public function clearNumRetries()
    {
        unset($this->num_retries);
    }

    /**
     * Specifies the allowed number retries. This number must be > 0. If not specified, defaults to 1.
     *
     * Generated from protobuf field <code>uint32 num_retries = 251680141;</code>
     * @param int $var
     * @return $this
     */
    public function setNumRetries($var)
    {
        GPBUtil::checkUint32($var);
        $this->num_retries = $var;

        return $this;
    }

    /**
     * Specifies a non-zero timeout per retry attempt.
     * If not specified, will use the timeout set in HttpRouteAction. If timeout in HttpRouteAction is not set, will use the largest timeout among all backend services associated with the route.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Duration per_try_timeout = 280041147;</code>
     * @return \Google\Cloud\Compute\V1\Duration|null
     */
    public function getPerTryTimeout()
    {
        return isset($this->per_try_timeout) ? $this->per_try_timeout : null;
    }

    public function hasPerTryTimeout()
    {
        return isset($this->per_try_timeout);
    }

    public function clearPerTryTimeout()
    {
        unset($this->per_try_timeout);
    }

    /**
     * Specifies a non-zero timeout per retry attempt.
     * If not specified, will use the timeout set in HttpRouteAction. If timeout in HttpRouteAction is not set, will use the largest timeout among all backend services associated with the route.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Duration per_try_timeout = 280041147;</code>
     * @param \Google\Cloud\Compute\V1\Duration $var
     * @return $this
     */
    public function setPerTryTimeout($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\Duration::class);
        $this->per_try_timeout = $var;

        return $this;
    }

    /**
     * Specfies one or more conditions when this retry rule applies. Valid values are:
     * - 5xx: Loadbalancer will attempt a retry if the backend service responds with any 5xx response code, or if the backend service does not respond at all, example: disconnects, reset, read timeout, connection failure, and refused streams.
     * - gateway-error: Similar to 5xx, but only applies to response codes 502, 503 or 504.
     * -
     * - connect-failure: Loadbalancer will retry on failures connecting to backend services, for example due to connection timeouts.
     * - retriable-4xx: Loadbalancer will retry for retriable 4xx response codes. Currently the only retriable error supported is 409.
     * - refused-stream:Loadbalancer will retry if the backend service resets the stream with a REFUSED_STREAM error code. This reset type indicates that it is safe to retry.
     * - cancelledLoadbalancer will retry if the gRPC status code in the response header is set to cancelled
     * - deadline-exceeded: Loadbalancer will retry if the gRPC status code in the response header is set to deadline-exceeded
     * - resource-exhausted: Loadbalancer will retry if the gRPC status code in the response header is set to resource-exhausted
     * - unavailable: Loadbalancer will retry if the gRPC status code in the response header is set to unavailable
     *
     * Generated from protobuf field <code>repeated string retry_conditions = 28815535;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRetryConditions()
    {
        return $this->retry_conditions;
    }

    /**
     * Specfies one or more conditions when this retry rule applies. Valid values are:
     * - 5xx: Loadbalancer will attempt a retry if the backend service responds with any 5xx response code, or if the backend service does not respond at all, example: disconnects, reset, read timeout, connection failure, and refused streams.
     * - gateway-error: Similar to 5xx, but only applies to response codes 502, 503 or 504.
     * -
     * - connect-failure: Loadbalancer will retry on failures connecting to backend services, for example due to connection timeouts.
     * - retriable-4xx: Loadbalancer will retry for retriable 4xx response codes. Currently the only retriable error supported is 409.
     * - refused-stream:Loadbalancer will retry if the backend service resets the stream with a REFUSED_STREAM error code. This reset type indicates that it is safe to retry.
     * - cancelledLoadbalancer will retry if the gRPC status code in the response header is set to cancelled
     * - deadline-exceeded: Loadbalancer will retry if the gRPC status code in the response header is set to deadline-exceeded
     * - resource-exhausted: Loadbalancer will retry if the gRPC status code in the response header is set to resource-exhausted
     * - unavailable: Loadbalancer will retry if the gRPC status code in the response header is set to unavailable
     *
     * Generated from protobuf field <code>repeated string retry_conditions = 28815535;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRetryConditions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->retry_conditions = $arr;

        return $this;
    }

}

