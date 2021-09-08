<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The location in Cloud Storage and naming method of the daily usage report. Contains bucket_name and report_name prefix.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.UsageExportLocation</code>
 */
class UsageExportLocation extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of an existing bucket in Cloud Storage where the usage report object is stored. The Google Service Account is granted write access to this bucket. This can either be the bucket name by itself, such as example-bucket, or the bucket name with gs:// or https://storage.googleapis.com/ in front of it, such as gs://example-bucket.
     *
     * Generated from protobuf field <code>string bucket_name = 283610048;</code>
     */
    protected $bucket_name = null;
    /**
     * An optional prefix for the name of the usage report object stored in bucketName. If not supplied, defaults to usage. The report is stored as a CSV file named report_name_prefix_gce_YYYYMMDD.csv where YYYYMMDD is the day of the usage according to Pacific Time. If you supply a prefix, it should conform to Cloud Storage object naming conventions.
     *
     * Generated from protobuf field <code>string report_name_prefix = 320198715;</code>
     */
    protected $report_name_prefix = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $bucket_name
     *           The name of an existing bucket in Cloud Storage where the usage report object is stored. The Google Service Account is granted write access to this bucket. This can either be the bucket name by itself, such as example-bucket, or the bucket name with gs:// or https://storage.googleapis.com/ in front of it, such as gs://example-bucket.
     *     @type string $report_name_prefix
     *           An optional prefix for the name of the usage report object stored in bucketName. If not supplied, defaults to usage. The report is stored as a CSV file named report_name_prefix_gce_YYYYMMDD.csv where YYYYMMDD is the day of the usage according to Pacific Time. If you supply a prefix, it should conform to Cloud Storage object naming conventions.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of an existing bucket in Cloud Storage where the usage report object is stored. The Google Service Account is granted write access to this bucket. This can either be the bucket name by itself, such as example-bucket, or the bucket name with gs:// or https://storage.googleapis.com/ in front of it, such as gs://example-bucket.
     *
     * Generated from protobuf field <code>string bucket_name = 283610048;</code>
     * @return string
     */
    public function getBucketName()
    {
        return isset($this->bucket_name) ? $this->bucket_name : '';
    }

    public function hasBucketName()
    {
        return isset($this->bucket_name);
    }

    public function clearBucketName()
    {
        unset($this->bucket_name);
    }

    /**
     * The name of an existing bucket in Cloud Storage where the usage report object is stored. The Google Service Account is granted write access to this bucket. This can either be the bucket name by itself, such as example-bucket, or the bucket name with gs:// or https://storage.googleapis.com/ in front of it, such as gs://example-bucket.
     *
     * Generated from protobuf field <code>string bucket_name = 283610048;</code>
     * @param string $var
     * @return $this
     */
    public function setBucketName($var)
    {
        GPBUtil::checkString($var, True);
        $this->bucket_name = $var;

        return $this;
    }

    /**
     * An optional prefix for the name of the usage report object stored in bucketName. If not supplied, defaults to usage. The report is stored as a CSV file named report_name_prefix_gce_YYYYMMDD.csv where YYYYMMDD is the day of the usage according to Pacific Time. If you supply a prefix, it should conform to Cloud Storage object naming conventions.
     *
     * Generated from protobuf field <code>string report_name_prefix = 320198715;</code>
     * @return string
     */
    public function getReportNamePrefix()
    {
        return isset($this->report_name_prefix) ? $this->report_name_prefix : '';
    }

    public function hasReportNamePrefix()
    {
        return isset($this->report_name_prefix);
    }

    public function clearReportNamePrefix()
    {
        unset($this->report_name_prefix);
    }

    /**
     * An optional prefix for the name of the usage report object stored in bucketName. If not supplied, defaults to usage. The report is stored as a CSV file named report_name_prefix_gce_YYYYMMDD.csv where YYYYMMDD is the day of the usage according to Pacific Time. If you supply a prefix, it should conform to Cloud Storage object naming conventions.
     *
     * Generated from protobuf field <code>string report_name_prefix = 320198715;</code>
     * @param string $var
     * @return $this
     */
    public function setReportNamePrefix($var)
    {
        GPBUtil::checkString($var, True);
        $this->report_name_prefix = $var;

        return $this;
    }

}

