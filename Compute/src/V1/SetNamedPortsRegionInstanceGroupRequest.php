<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for RegionInstanceGroups.SetNamedPorts. See the method description for details.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.SetNamedPortsRegionInstanceGroupRequest</code>
 */
class SetNamedPortsRegionInstanceGroupRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the regional instance group where the named ports are updated.
     *
     * Generated from protobuf field <code>string instance_group = 81095253 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $instance_group = '';
    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $project = '';
    /**
     * Name of the region scoping this request.
     *
     * Generated from protobuf field <code>string region = 138946292 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $region = '';
    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.RegionInstanceGroupsSetNamedPortsRequest region_instance_groups_set_named_ports_request_resource = 1574938 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $region_instance_groups_set_named_ports_request_resource = null;
    /**
     * An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed.
     * For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 37109963;</code>
     */
    protected $request_id = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $instance_group
     *           The name of the regional instance group where the named ports are updated.
     *     @type string $project
     *           Project ID for this request.
     *     @type string $region
     *           Name of the region scoping this request.
     *     @type \Google\Cloud\Compute\V1\RegionInstanceGroupsSetNamedPortsRequest $region_instance_groups_set_named_ports_request_resource
     *           The body resource for this request
     *     @type string $request_id
     *           An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed.
     *           For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments.
     *           The request ID must be a valid UUID with the exception that zero UUID is not supported (00000000-0000-0000-0000-000000000000).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the regional instance group where the named ports are updated.
     *
     * Generated from protobuf field <code>string instance_group = 81095253 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getInstanceGroup()
    {
        return $this->instance_group;
    }

    /**
     * The name of the regional instance group where the named ports are updated.
     *
     * Generated from protobuf field <code>string instance_group = 81095253 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setInstanceGroup($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance_group = $var;

        return $this;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

    /**
     * Name of the region scoping this request.
     *
     * Generated from protobuf field <code>string region = 138946292 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Name of the region scoping this request.
     *
     * Generated from protobuf field <code>string region = 138946292 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.RegionInstanceGroupsSetNamedPortsRequest region_instance_groups_set_named_ports_request_resource = 1574938 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Compute\V1\RegionInstanceGroupsSetNamedPortsRequest|null
     */
    public function getRegionInstanceGroupsSetNamedPortsRequestResource()
    {
        return isset($this->region_instance_groups_set_named_ports_request_resource) ? $this->region_instance_groups_set_named_ports_request_resource : null;
    }

    public function hasRegionInstanceGroupsSetNamedPortsRequestResource()
    {
        return isset($this->region_instance_groups_set_named_ports_request_resource);
    }

    public function clearRegionInstanceGroupsSetNamedPortsRequestResource()
    {
        unset($this->region_instance_groups_set_named_ports_request_resource);
    }

    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.RegionInstanceGroupsSetNamedPortsRequest region_instance_groups_set_named_ports_request_resource = 1574938 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Compute\V1\RegionInstanceGroupsSetNamedPortsRequest $var
     * @return $this
     */
    public function setRegionInstanceGroupsSetNamedPortsRequestResource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\RegionInstanceGroupsSetNamedPortsRequest::class);
        $this->region_instance_groups_set_named_ports_request_resource = $var;

        return $this;
    }

    /**
     * An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed.
     * For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 37109963;</code>
     * @return string
     */
    public function getRequestId()
    {
        return isset($this->request_id) ? $this->request_id : '';
    }

    public function hasRequestId()
    {
        return isset($this->request_id);
    }

    public function clearRequestId()
    {
        unset($this->request_id);
    }

    /**
     * An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed.
     * For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 37109963;</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

}

