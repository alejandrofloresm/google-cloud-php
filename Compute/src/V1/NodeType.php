<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represent a sole-tenant Node Type resource.
 * Each node within a node group must have a node type. A node type specifies the total amount of cores and memory for that node. Currently, the only available node type is n1-node-96-624 node type that has 96 vCPUs and 624 GB of memory, available in multiple zones. For more information read Node types. (== resource_for {$api_version}.nodeTypes ==)
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.NodeType</code>
 */
class NodeType extends \Google\Protobuf\Internal\Message
{
    /**
     * [Output Only] The CPU platform used by this node type.
     *
     * Generated from protobuf field <code>string cpu_platform = 410285354;</code>
     */
    protected $cpu_platform = null;
    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>string creation_timestamp = 30525366;</code>
     */
    protected $creation_timestamp = null;
    /**
     * [Output Only] The deprecation status associated with this node type.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.DeprecationStatus deprecated = 515138995;</code>
     */
    protected $deprecated = null;
    /**
     * [Output Only] An optional textual description of the resource.
     *
     * Generated from protobuf field <code>string description = 422937596;</code>
     */
    protected $description = null;
    /**
     * [Output Only] The number of virtual CPUs that are available to the node type.
     *
     * Generated from protobuf field <code>int32 guest_cpus = 393356754;</code>
     */
    protected $guest_cpus = null;
    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>uint64 id = 3355;</code>
     */
    protected $id = null;
    /**
     * [Output Only] The type of the resource. Always compute#nodeType for node types.
     *
     * Generated from protobuf field <code>string kind = 3292052;</code>
     */
    protected $kind = null;
    /**
     * [Output Only] Local SSD available to the node type, defined in GB.
     *
     * Generated from protobuf field <code>int32 local_ssd_gb = 329237578;</code>
     */
    protected $local_ssd_gb = null;
    /**
     * [Output Only] The amount of physical memory available to the node type, defined in MB.
     *
     * Generated from protobuf field <code>int32 memory_mb = 116001171;</code>
     */
    protected $memory_mb = null;
    /**
     * [Output Only] Name of the resource.
     *
     * Generated from protobuf field <code>string name = 3373707;</code>
     */
    protected $name = null;
    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>string self_link = 456214797;</code>
     */
    protected $self_link = null;
    /**
     * [Output Only] The name of the zone where the node type resides, such as us-central1-a.
     *
     * Generated from protobuf field <code>string zone = 3744684;</code>
     */
    protected $zone = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $cpu_platform
     *           [Output Only] The CPU platform used by this node type.
     *     @type string $creation_timestamp
     *           [Output Only] Creation timestamp in RFC3339 text format.
     *     @type \Google\Cloud\Compute\V1\DeprecationStatus $deprecated
     *           [Output Only] The deprecation status associated with this node type.
     *     @type string $description
     *           [Output Only] An optional textual description of the resource.
     *     @type int $guest_cpus
     *           [Output Only] The number of virtual CPUs that are available to the node type.
     *     @type int|string $id
     *           [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *     @type string $kind
     *           [Output Only] The type of the resource. Always compute#nodeType for node types.
     *     @type int $local_ssd_gb
     *           [Output Only] Local SSD available to the node type, defined in GB.
     *     @type int $memory_mb
     *           [Output Only] The amount of physical memory available to the node type, defined in MB.
     *     @type string $name
     *           [Output Only] Name of the resource.
     *     @type string $self_link
     *           [Output Only] Server-defined URL for the resource.
     *     @type string $zone
     *           [Output Only] The name of the zone where the node type resides, such as us-central1-a.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * [Output Only] The CPU platform used by this node type.
     *
     * Generated from protobuf field <code>string cpu_platform = 410285354;</code>
     * @return string
     */
    public function getCpuPlatform()
    {
        return isset($this->cpu_platform) ? $this->cpu_platform : '';
    }

    public function hasCpuPlatform()
    {
        return isset($this->cpu_platform);
    }

    public function clearCpuPlatform()
    {
        unset($this->cpu_platform);
    }

    /**
     * [Output Only] The CPU platform used by this node type.
     *
     * Generated from protobuf field <code>string cpu_platform = 410285354;</code>
     * @param string $var
     * @return $this
     */
    public function setCpuPlatform($var)
    {
        GPBUtil::checkString($var, True);
        $this->cpu_platform = $var;

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
     * [Output Only] The deprecation status associated with this node type.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.DeprecationStatus deprecated = 515138995;</code>
     * @return \Google\Cloud\Compute\V1\DeprecationStatus|null
     */
    public function getDeprecated()
    {
        return isset($this->deprecated) ? $this->deprecated : null;
    }

    public function hasDeprecated()
    {
        return isset($this->deprecated);
    }

    public function clearDeprecated()
    {
        unset($this->deprecated);
    }

    /**
     * [Output Only] The deprecation status associated with this node type.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.DeprecationStatus deprecated = 515138995;</code>
     * @param \Google\Cloud\Compute\V1\DeprecationStatus $var
     * @return $this
     */
    public function setDeprecated($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\DeprecationStatus::class);
        $this->deprecated = $var;

        return $this;
    }

    /**
     * [Output Only] An optional textual description of the resource.
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
     * [Output Only] An optional textual description of the resource.
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
     * [Output Only] The number of virtual CPUs that are available to the node type.
     *
     * Generated from protobuf field <code>int32 guest_cpus = 393356754;</code>
     * @return int
     */
    public function getGuestCpus()
    {
        return isset($this->guest_cpus) ? $this->guest_cpus : 0;
    }

    public function hasGuestCpus()
    {
        return isset($this->guest_cpus);
    }

    public function clearGuestCpus()
    {
        unset($this->guest_cpus);
    }

    /**
     * [Output Only] The number of virtual CPUs that are available to the node type.
     *
     * Generated from protobuf field <code>int32 guest_cpus = 393356754;</code>
     * @param int $var
     * @return $this
     */
    public function setGuestCpus($var)
    {
        GPBUtil::checkInt32($var);
        $this->guest_cpus = $var;

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
     * [Output Only] The type of the resource. Always compute#nodeType for node types.
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
     * [Output Only] The type of the resource. Always compute#nodeType for node types.
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
     * [Output Only] Local SSD available to the node type, defined in GB.
     *
     * Generated from protobuf field <code>int32 local_ssd_gb = 329237578;</code>
     * @return int
     */
    public function getLocalSsdGb()
    {
        return isset($this->local_ssd_gb) ? $this->local_ssd_gb : 0;
    }

    public function hasLocalSsdGb()
    {
        return isset($this->local_ssd_gb);
    }

    public function clearLocalSsdGb()
    {
        unset($this->local_ssd_gb);
    }

    /**
     * [Output Only] Local SSD available to the node type, defined in GB.
     *
     * Generated from protobuf field <code>int32 local_ssd_gb = 329237578;</code>
     * @param int $var
     * @return $this
     */
    public function setLocalSsdGb($var)
    {
        GPBUtil::checkInt32($var);
        $this->local_ssd_gb = $var;

        return $this;
    }

    /**
     * [Output Only] The amount of physical memory available to the node type, defined in MB.
     *
     * Generated from protobuf field <code>int32 memory_mb = 116001171;</code>
     * @return int
     */
    public function getMemoryMb()
    {
        return isset($this->memory_mb) ? $this->memory_mb : 0;
    }

    public function hasMemoryMb()
    {
        return isset($this->memory_mb);
    }

    public function clearMemoryMb()
    {
        unset($this->memory_mb);
    }

    /**
     * [Output Only] The amount of physical memory available to the node type, defined in MB.
     *
     * Generated from protobuf field <code>int32 memory_mb = 116001171;</code>
     * @param int $var
     * @return $this
     */
    public function setMemoryMb($var)
    {
        GPBUtil::checkInt32($var);
        $this->memory_mb = $var;

        return $this;
    }

    /**
     * [Output Only] Name of the resource.
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
     * [Output Only] Name of the resource.
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
     * [Output Only] The name of the zone where the node type resides, such as us-central1-a.
     *
     * Generated from protobuf field <code>string zone = 3744684;</code>
     * @return string
     */
    public function getZone()
    {
        return isset($this->zone) ? $this->zone : '';
    }

    public function hasZone()
    {
        return isset($this->zone);
    }

    public function clearZone()
    {
        unset($this->zone);
    }

    /**
     * [Output Only] The name of the zone where the node type resides, such as us-central1-a.
     *
     * Generated from protobuf field <code>string zone = 3744684;</code>
     * @param string $var
     * @return $this
     */
    public function setZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->zone = $var;

        return $this;
    }

}

