<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Write a Cloud Audit log
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.LogConfigCloudAuditOptions</code>
 */
class LogConfigCloudAuditOptions extends \Google\Protobuf\Internal\Message
{
    /**
     * Information used by the Cloud Audit Logging pipeline.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.AuthorizationLoggingOptions authorization_logging_options = 217861624;</code>
     */
    protected $authorization_logging_options = null;
    /**
     * The log_name to populate in the Cloud Audit Record.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.LogConfigCloudAuditOptions.LogName log_name = 402913958;</code>
     */
    protected $log_name = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Compute\V1\AuthorizationLoggingOptions $authorization_logging_options
     *           Information used by the Cloud Audit Logging pipeline.
     *     @type int $log_name
     *           The log_name to populate in the Cloud Audit Record.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Information used by the Cloud Audit Logging pipeline.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.AuthorizationLoggingOptions authorization_logging_options = 217861624;</code>
     * @return \Google\Cloud\Compute\V1\AuthorizationLoggingOptions|null
     */
    public function getAuthorizationLoggingOptions()
    {
        return isset($this->authorization_logging_options) ? $this->authorization_logging_options : null;
    }

    public function hasAuthorizationLoggingOptions()
    {
        return isset($this->authorization_logging_options);
    }

    public function clearAuthorizationLoggingOptions()
    {
        unset($this->authorization_logging_options);
    }

    /**
     * Information used by the Cloud Audit Logging pipeline.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.AuthorizationLoggingOptions authorization_logging_options = 217861624;</code>
     * @param \Google\Cloud\Compute\V1\AuthorizationLoggingOptions $var
     * @return $this
     */
    public function setAuthorizationLoggingOptions($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\AuthorizationLoggingOptions::class);
        $this->authorization_logging_options = $var;

        return $this;
    }

    /**
     * The log_name to populate in the Cloud Audit Record.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.LogConfigCloudAuditOptions.LogName log_name = 402913958;</code>
     * @return int
     */
    public function getLogName()
    {
        return isset($this->log_name) ? $this->log_name : 0;
    }

    public function hasLogName()
    {
        return isset($this->log_name);
    }

    public function clearLogName()
    {
        unset($this->log_name);
    }

    /**
     * The log_name to populate in the Cloud Audit Record.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.LogConfigCloudAuditOptions.LogName log_name = 402913958;</code>
     * @param int $var
     * @return $this
     */
    public function setLogName($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Compute\V1\LogConfigCloudAuditOptions\LogName::class);
        $this->log_name = $var;

        return $this;
    }

}

