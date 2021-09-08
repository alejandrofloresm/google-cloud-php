<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Increment a streamz counter with the specified metric and field names.
 * Metric names should start with a '/', generally be lowercase-only, and end in "_count". Field names should not contain an initial slash. The actual exported metric names will have "/iam/policy" prepended.
 * Field names correspond to IAM request parameters and field values are their respective values.
 * Supported field names: - "authority", which is "[token]" if IAMContext.token is present, otherwise the value of IAMContext.authority_selector if present, and otherwise a representation of IAMContext.principal; or - "iam_principal", a representation of IAMContext.principal even if a token or authority selector is present; or - "" (empty string), resulting in a counter with no fields.
 * Examples: counter { metric: "/debug_access_count" field: "iam_principal" } ==> increment counter /iam/policy/debug_access_count {iam_principal=[value of IAMContext.principal]}
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.LogConfigCounterOptions</code>
 */
class LogConfigCounterOptions extends \Google\Protobuf\Internal\Message
{
    /**
     * Custom fields.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.LogConfigCounterOptionsCustomField custom_fields = 249651015;</code>
     */
    private $custom_fields;
    /**
     * The field value to attribute.
     *
     * Generated from protobuf field <code>string field = 97427706;</code>
     */
    protected $field = null;
    /**
     * The metric to update.
     *
     * Generated from protobuf field <code>string metric = 533067184;</code>
     */
    protected $metric = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Compute\V1\LogConfigCounterOptionsCustomField[]|\Google\Protobuf\Internal\RepeatedField $custom_fields
     *           Custom fields.
     *     @type string $field
     *           The field value to attribute.
     *     @type string $metric
     *           The metric to update.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Custom fields.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.LogConfigCounterOptionsCustomField custom_fields = 249651015;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCustomFields()
    {
        return $this->custom_fields;
    }

    /**
     * Custom fields.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.LogConfigCounterOptionsCustomField custom_fields = 249651015;</code>
     * @param \Google\Cloud\Compute\V1\LogConfigCounterOptionsCustomField[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCustomFields($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\LogConfigCounterOptionsCustomField::class);
        $this->custom_fields = $arr;

        return $this;
    }

    /**
     * The field value to attribute.
     *
     * Generated from protobuf field <code>string field = 97427706;</code>
     * @return string
     */
    public function getField()
    {
        return isset($this->field) ? $this->field : '';
    }

    public function hasField()
    {
        return isset($this->field);
    }

    public function clearField()
    {
        unset($this->field);
    }

    /**
     * The field value to attribute.
     *
     * Generated from protobuf field <code>string field = 97427706;</code>
     * @param string $var
     * @return $this
     */
    public function setField($var)
    {
        GPBUtil::checkString($var, True);
        $this->field = $var;

        return $this;
    }

    /**
     * The metric to update.
     *
     * Generated from protobuf field <code>string metric = 533067184;</code>
     * @return string
     */
    public function getMetric()
    {
        return isset($this->metric) ? $this->metric : '';
    }

    public function hasMetric()
    {
        return isset($this->metric);
    }

    public function clearMetric()
    {
        unset($this->metric);
    }

    /**
     * The metric to update.
     *
     * Generated from protobuf field <code>string metric = 533067184;</code>
     * @param string $var
     * @return $this
     */
    public function setMetric($var)
    {
        GPBUtil::checkString($var, True);
        $this->metric = $var;

        return $this;
    }

}

