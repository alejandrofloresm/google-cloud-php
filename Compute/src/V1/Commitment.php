<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a regional Commitment resource.
 * Creating a commitment resource means that you are purchasing a committed use contract with an explicit start and end time. You can create commitments based on vCPUs and memory usage and receive discounted rates. For full details, read Signing Up for Committed Use Discounts. (== resource_for {$api_version}.regionCommitments ==)
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.Commitment</code>
 */
class Commitment extends \Google\Protobuf\Internal\Message
{
    /**
     * The category of the commitment. Category MACHINE specifies commitments composed of machine resources such as VCPU or MEMORY, listed in resources. Category LICENSE specifies commitments composed of software licenses, listed in licenseResources. Note that only MACHINE commitments should have a Type specified.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Commitment.Category category = 50511102;</code>
     */
    protected $category = null;
    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>string creation_timestamp = 30525366;</code>
     */
    protected $creation_timestamp = null;
    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>string description = 422937596;</code>
     */
    protected $description = null;
    /**
     * [Output Only] Commitment end time in RFC3339 text format.
     *
     * Generated from protobuf field <code>string end_timestamp = 468096690;</code>
     */
    protected $end_timestamp = null;
    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>uint64 id = 3355;</code>
     */
    protected $id = null;
    /**
     * [Output Only] Type of the resource. Always compute#commitment for commitments.
     *
     * Generated from protobuf field <code>string kind = 3292052;</code>
     */
    protected $kind = null;
    /**
     * The license specification required as part of a license commitment.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.LicenseResourceCommitment license_resource = 437955148;</code>
     */
    protected $license_resource = null;
    /**
     * Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>string name = 3373707;</code>
     */
    protected $name = null;
    /**
     * The plan for this commitment, which determines duration and discount rate. The currently supported plans are TWELVE_MONTH (1 year), and THIRTY_SIX_MONTH (3 years).
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Commitment.Plan plan = 3443497;</code>
     */
    protected $plan = null;
    /**
     * [Output Only] URL of the region where this commitment may be used.
     *
     * Generated from protobuf field <code>string region = 138946292;</code>
     */
    protected $region = null;
    /**
     * List of reservations in this commitment.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.Reservation reservations = 399717927;</code>
     */
    private $reservations;
    /**
     * A list of commitment amounts for particular resources. Note that VCPU and MEMORY resource commitments must occur together.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.ResourceCommitment resources = 164412965;</code>
     */
    private $resources;
    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>string self_link = 456214797;</code>
     */
    protected $self_link = null;
    /**
     * [Output Only] Commitment start time in RFC3339 text format.
     *
     * Generated from protobuf field <code>string start_timestamp = 83645817;</code>
     */
    protected $start_timestamp = null;
    /**
     * [Output Only] Status of the commitment with regards to eventual expiration (each commitment has an end date defined). One of the following values: NOT_YET_ACTIVE, ACTIVE, EXPIRED.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Commitment.Status status = 181260274;</code>
     */
    protected $status = null;
    /**
     * [Output Only] An optional, human-readable explanation of the status.
     *
     * Generated from protobuf field <code>string status_message = 297428154;</code>
     */
    protected $status_message = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $category
     *           The category of the commitment. Category MACHINE specifies commitments composed of machine resources such as VCPU or MEMORY, listed in resources. Category LICENSE specifies commitments composed of software licenses, listed in licenseResources. Note that only MACHINE commitments should have a Type specified.
     *     @type string $creation_timestamp
     *           [Output Only] Creation timestamp in RFC3339 text format.
     *     @type string $description
     *           An optional description of this resource. Provide this property when you create the resource.
     *     @type string $end_timestamp
     *           [Output Only] Commitment end time in RFC3339 text format.
     *     @type int|string $id
     *           [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *     @type string $kind
     *           [Output Only] Type of the resource. Always compute#commitment for commitments.
     *     @type \Google\Cloud\Compute\V1\LicenseResourceCommitment $license_resource
     *           The license specification required as part of a license commitment.
     *     @type string $name
     *           Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *     @type int $plan
     *           The plan for this commitment, which determines duration and discount rate. The currently supported plans are TWELVE_MONTH (1 year), and THIRTY_SIX_MONTH (3 years).
     *     @type string $region
     *           [Output Only] URL of the region where this commitment may be used.
     *     @type \Google\Cloud\Compute\V1\Reservation[]|\Google\Protobuf\Internal\RepeatedField $reservations
     *           List of reservations in this commitment.
     *     @type \Google\Cloud\Compute\V1\ResourceCommitment[]|\Google\Protobuf\Internal\RepeatedField $resources
     *           A list of commitment amounts for particular resources. Note that VCPU and MEMORY resource commitments must occur together.
     *     @type string $self_link
     *           [Output Only] Server-defined URL for the resource.
     *     @type string $start_timestamp
     *           [Output Only] Commitment start time in RFC3339 text format.
     *     @type int $status
     *           [Output Only] Status of the commitment with regards to eventual expiration (each commitment has an end date defined). One of the following values: NOT_YET_ACTIVE, ACTIVE, EXPIRED.
     *     @type string $status_message
     *           [Output Only] An optional, human-readable explanation of the status.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The category of the commitment. Category MACHINE specifies commitments composed of machine resources such as VCPU or MEMORY, listed in resources. Category LICENSE specifies commitments composed of software licenses, listed in licenseResources. Note that only MACHINE commitments should have a Type specified.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Commitment.Category category = 50511102;</code>
     * @return int
     */
    public function getCategory()
    {
        return isset($this->category) ? $this->category : 0;
    }

    public function hasCategory()
    {
        return isset($this->category);
    }

    public function clearCategory()
    {
        unset($this->category);
    }

    /**
     * The category of the commitment. Category MACHINE specifies commitments composed of machine resources such as VCPU or MEMORY, listed in resources. Category LICENSE specifies commitments composed of software licenses, listed in licenseResources. Note that only MACHINE commitments should have a Type specified.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Commitment.Category category = 50511102;</code>
     * @param int $var
     * @return $this
     */
    public function setCategory($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Compute\V1\Commitment\Category::class);
        $this->category = $var;

        return $this;
    }

    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>string creation_timestamp = 30525366;</code>
     * @return string
     */
    public function getCreationTimestamp()
    {
        return isset($this->creation_timestamp) ? $this->creation_timestamp : '';
    }

    public function hasCreationTimestamp()
    {
        return isset($this->creation_timestamp);
    }

    public function clearCreationTimestamp()
    {
        unset($this->creation_timestamp);
    }

    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>string creation_timestamp = 30525366;</code>
     * @param string $var
     * @return $this
     */
    public function setCreationTimestamp($var)
    {
        GPBUtil::checkString($var, True);
        $this->creation_timestamp = $var;

        return $this;
    }

    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>string description = 422937596;</code>
     * @return string
     */
    public function getDescription()
    {
        return isset($this->description) ? $this->description : '';
    }

    public function hasDescription()
    {
        return isset($this->description);
    }

    public function clearDescription()
    {
        unset($this->description);
    }

    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>string description = 422937596;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * [Output Only] Commitment end time in RFC3339 text format.
     *
     * Generated from protobuf field <code>string end_timestamp = 468096690;</code>
     * @return string
     */
    public function getEndTimestamp()
    {
        return isset($this->end_timestamp) ? $this->end_timestamp : '';
    }

    public function hasEndTimestamp()
    {
        return isset($this->end_timestamp);
    }

    public function clearEndTimestamp()
    {
        unset($this->end_timestamp);
    }

    /**
     * [Output Only] Commitment end time in RFC3339 text format.
     *
     * Generated from protobuf field <code>string end_timestamp = 468096690;</code>
     * @param string $var
     * @return $this
     */
    public function setEndTimestamp($var)
    {
        GPBUtil::checkString($var, True);
        $this->end_timestamp = $var;

        return $this;
    }

    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>uint64 id = 3355;</code>
     * @return int|string
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : 0;
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>uint64 id = 3355;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * [Output Only] Type of the resource. Always compute#commitment for commitments.
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
     * [Output Only] Type of the resource. Always compute#commitment for commitments.
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

    /**
     * The license specification required as part of a license commitment.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.LicenseResourceCommitment license_resource = 437955148;</code>
     * @return \Google\Cloud\Compute\V1\LicenseResourceCommitment|null
     */
    public function getLicenseResource()
    {
        return isset($this->license_resource) ? $this->license_resource : null;
    }

    public function hasLicenseResource()
    {
        return isset($this->license_resource);
    }

    public function clearLicenseResource()
    {
        unset($this->license_resource);
    }

    /**
     * The license specification required as part of a license commitment.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.LicenseResourceCommitment license_resource = 437955148;</code>
     * @param \Google\Cloud\Compute\V1\LicenseResourceCommitment $var
     * @return $this
     */
    public function setLicenseResource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\LicenseResourceCommitment::class);
        $this->license_resource = $var;

        return $this;
    }

    /**
     * Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>string name = 3373707;</code>
     * @return string
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : '';
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>string name = 3373707;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The plan for this commitment, which determines duration and discount rate. The currently supported plans are TWELVE_MONTH (1 year), and THIRTY_SIX_MONTH (3 years).
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Commitment.Plan plan = 3443497;</code>
     * @return int
     */
    public function getPlan()
    {
        return isset($this->plan) ? $this->plan : 0;
    }

    public function hasPlan()
    {
        return isset($this->plan);
    }

    public function clearPlan()
    {
        unset($this->plan);
    }

    /**
     * The plan for this commitment, which determines duration and discount rate. The currently supported plans are TWELVE_MONTH (1 year), and THIRTY_SIX_MONTH (3 years).
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Commitment.Plan plan = 3443497;</code>
     * @param int $var
     * @return $this
     */
    public function setPlan($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Compute\V1\Commitment\Plan::class);
        $this->plan = $var;

        return $this;
    }

    /**
     * [Output Only] URL of the region where this commitment may be used.
     *
     * Generated from protobuf field <code>string region = 138946292;</code>
     * @return string
     */
    public function getRegion()
    {
        return isset($this->region) ? $this->region : '';
    }

    public function hasRegion()
    {
        return isset($this->region);
    }

    public function clearRegion()
    {
        unset($this->region);
    }

    /**
     * [Output Only] URL of the region where this commitment may be used.
     *
     * Generated from protobuf field <code>string region = 138946292;</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

    /**
     * List of reservations in this commitment.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.Reservation reservations = 399717927;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getReservations()
    {
        return $this->reservations;
    }

    /**
     * List of reservations in this commitment.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.Reservation reservations = 399717927;</code>
     * @param \Google\Cloud\Compute\V1\Reservation[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setReservations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\Reservation::class);
        $this->reservations = $arr;

        return $this;
    }

    /**
     * A list of commitment amounts for particular resources. Note that VCPU and MEMORY resource commitments must occur together.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.ResourceCommitment resources = 164412965;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResources()
    {
        return $this->resources;
    }

    /**
     * A list of commitment amounts for particular resources. Note that VCPU and MEMORY resource commitments must occur together.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.ResourceCommitment resources = 164412965;</code>
     * @param \Google\Cloud\Compute\V1\ResourceCommitment[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResources($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\ResourceCommitment::class);
        $this->resources = $arr;

        return $this;
    }

    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>string self_link = 456214797;</code>
     * @return string
     */
    public function getSelfLink()
    {
        return isset($this->self_link) ? $this->self_link : '';
    }

    public function hasSelfLink()
    {
        return isset($this->self_link);
    }

    public function clearSelfLink()
    {
        unset($this->self_link);
    }

    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>string self_link = 456214797;</code>
     * @param string $var
     * @return $this
     */
    public function setSelfLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->self_link = $var;

        return $this;
    }

    /**
     * [Output Only] Commitment start time in RFC3339 text format.
     *
     * Generated from protobuf field <code>string start_timestamp = 83645817;</code>
     * @return string
     */
    public function getStartTimestamp()
    {
        return isset($this->start_timestamp) ? $this->start_timestamp : '';
    }

    public function hasStartTimestamp()
    {
        return isset($this->start_timestamp);
    }

    public function clearStartTimestamp()
    {
        unset($this->start_timestamp);
    }

    /**
     * [Output Only] Commitment start time in RFC3339 text format.
     *
     * Generated from protobuf field <code>string start_timestamp = 83645817;</code>
     * @param string $var
     * @return $this
     */
    public function setStartTimestamp($var)
    {
        GPBUtil::checkString($var, True);
        $this->start_timestamp = $var;

        return $this;
    }

    /**
     * [Output Only] Status of the commitment with regards to eventual expiration (each commitment has an end date defined). One of the following values: NOT_YET_ACTIVE, ACTIVE, EXPIRED.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Commitment.Status status = 181260274;</code>
     * @return int
     */
    public function getStatus()
    {
        return isset($this->status) ? $this->status : 0;
    }

    public function hasStatus()
    {
        return isset($this->status);
    }

    public function clearStatus()
    {
        unset($this->status);
    }

    /**
     * [Output Only] Status of the commitment with regards to eventual expiration (each commitment has an end date defined). One of the following values: NOT_YET_ACTIVE, ACTIVE, EXPIRED.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Commitment.Status status = 181260274;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Compute\V1\Commitment\Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * [Output Only] An optional, human-readable explanation of the status.
     *
     * Generated from protobuf field <code>string status_message = 297428154;</code>
     * @return string
     */
    public function getStatusMessage()
    {
        return isset($this->status_message) ? $this->status_message : '';
    }

    public function hasStatusMessage()
    {
        return isset($this->status_message);
    }

    public function clearStatusMessage()
    {
        unset($this->status_message);
    }

    /**
     * [Output Only] An optional, human-readable explanation of the status.
     *
     * Generated from protobuf field <code>string status_message = 297428154;</code>
     * @param string $var
     * @return $this
     */
    public function setStatusMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->status_message = $var;

        return $this;
    }

}

