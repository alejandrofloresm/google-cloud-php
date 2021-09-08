<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents an external VPN gateway.
 * External VPN gateway is the on-premises VPN gateway(s) or another cloud provider's VPN gateway that connects to your Google Cloud VPN gateway.
 * To create a highly available VPN from Google Cloud Platform to your VPN gateway or another cloud provider's VPN gateway, you must create a external VPN gateway resource with information about the other gateway.
 * For more information about using external VPN gateways, see  Creating an HA VPN gateway and tunnel pair to a peer VPN. (== resource_for {$api_version}.externalVpnGateways ==)
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.ExternalVpnGateway</code>
 */
class ExternalVpnGateway extends \Google\Protobuf\Internal\Message
{
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
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>uint64 id = 3355;</code>
     */
    protected $id = null;
    /**
     * List of interfaces for this external VPN gateway.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.ExternalVpnGatewayInterface interfaces = 12073562;</code>
     */
    private $interfaces;
    /**
     * [Output Only] Type of the resource. Always compute#externalVpnGateway for externalVpnGateways.
     *
     * Generated from protobuf field <code>string kind = 3292052;</code>
     */
    protected $kind = null;
    /**
     * A fingerprint for the labels being applied to this ExternalVpnGateway, which is essentially a hash of the labels set used for optimistic locking. The fingerprint is initially generated by Compute Engine and changes after every request to modify or update labels. You must always provide an up-to-date fingerprint hash in order to update or change labels, otherwise the request will fail with error 412 conditionNotMet.
     * To see the latest fingerprint, make a get() request to retrieve an ExternalVpnGateway.
     *
     * Generated from protobuf field <code>string label_fingerprint = 178124825;</code>
     */
    protected $label_fingerprint = null;
    /**
     * Labels for this resource. These can only be added or modified by the setLabels method. Each label key/value pair must comply with RFC1035. Label values may be empty.
     *
     * Generated from protobuf field <code>map<string, string> labels = 500195327;</code>
     */
    private $labels;
    /**
     * Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>string name = 3373707;</code>
     */
    protected $name = null;
    /**
     * Indicates the user-supplied redundancy type of this external VPN gateway.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.ExternalVpnGateway.RedundancyType redundancy_type = 271443740;</code>
     */
    protected $redundancy_type = null;
    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>string self_link = 456214797;</code>
     */
    protected $self_link = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $creation_timestamp
     *           [Output Only] Creation timestamp in RFC3339 text format.
     *     @type string $description
     *           An optional description of this resource. Provide this property when you create the resource.
     *     @type int|string $id
     *           [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *     @type \Google\Cloud\Compute\V1\ExternalVpnGatewayInterface[]|\Google\Protobuf\Internal\RepeatedField $interfaces
     *           List of interfaces for this external VPN gateway.
     *     @type string $kind
     *           [Output Only] Type of the resource. Always compute#externalVpnGateway for externalVpnGateways.
     *     @type string $label_fingerprint
     *           A fingerprint for the labels being applied to this ExternalVpnGateway, which is essentially a hash of the labels set used for optimistic locking. The fingerprint is initially generated by Compute Engine and changes after every request to modify or update labels. You must always provide an up-to-date fingerprint hash in order to update or change labels, otherwise the request will fail with error 412 conditionNotMet.
     *           To see the latest fingerprint, make a get() request to retrieve an ExternalVpnGateway.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Labels for this resource. These can only be added or modified by the setLabels method. Each label key/value pair must comply with RFC1035. Label values may be empty.
     *     @type string $name
     *           Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *     @type int $redundancy_type
     *           Indicates the user-supplied redundancy type of this external VPN gateway.
     *     @type string $self_link
     *           [Output Only] Server-defined URL for the resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
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
     * List of interfaces for this external VPN gateway.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.ExternalVpnGatewayInterface interfaces = 12073562;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInterfaces()
    {
        return $this->interfaces;
    }

    /**
     * List of interfaces for this external VPN gateway.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.ExternalVpnGatewayInterface interfaces = 12073562;</code>
     * @param \Google\Cloud\Compute\V1\ExternalVpnGatewayInterface[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInterfaces($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\ExternalVpnGatewayInterface::class);
        $this->interfaces = $arr;

        return $this;
    }

    /**
     * [Output Only] Type of the resource. Always compute#externalVpnGateway for externalVpnGateways.
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
     * [Output Only] Type of the resource. Always compute#externalVpnGateway for externalVpnGateways.
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
     * A fingerprint for the labels being applied to this ExternalVpnGateway, which is essentially a hash of the labels set used for optimistic locking. The fingerprint is initially generated by Compute Engine and changes after every request to modify or update labels. You must always provide an up-to-date fingerprint hash in order to update or change labels, otherwise the request will fail with error 412 conditionNotMet.
     * To see the latest fingerprint, make a get() request to retrieve an ExternalVpnGateway.
     *
     * Generated from protobuf field <code>string label_fingerprint = 178124825;</code>
     * @return string
     */
    public function getLabelFingerprint()
    {
        return isset($this->label_fingerprint) ? $this->label_fingerprint : '';
    }

    public function hasLabelFingerprint()
    {
        return isset($this->label_fingerprint);
    }

    public function clearLabelFingerprint()
    {
        unset($this->label_fingerprint);
    }

    /**
     * A fingerprint for the labels being applied to this ExternalVpnGateway, which is essentially a hash of the labels set used for optimistic locking. The fingerprint is initially generated by Compute Engine and changes after every request to modify or update labels. You must always provide an up-to-date fingerprint hash in order to update or change labels, otherwise the request will fail with error 412 conditionNotMet.
     * To see the latest fingerprint, make a get() request to retrieve an ExternalVpnGateway.
     *
     * Generated from protobuf field <code>string label_fingerprint = 178124825;</code>
     * @param string $var
     * @return $this
     */
    public function setLabelFingerprint($var)
    {
        GPBUtil::checkString($var, True);
        $this->label_fingerprint = $var;

        return $this;
    }

    /**
     * Labels for this resource. These can only be added or modified by the setLabels method. Each label key/value pair must comply with RFC1035. Label values may be empty.
     *
     * Generated from protobuf field <code>map<string, string> labels = 500195327;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Labels for this resource. These can only be added or modified by the setLabels method. Each label key/value pair must comply with RFC1035. Label values may be empty.
     *
     * Generated from protobuf field <code>map<string, string> labels = 500195327;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

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
     * Indicates the user-supplied redundancy type of this external VPN gateway.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.ExternalVpnGateway.RedundancyType redundancy_type = 271443740;</code>
     * @return int
     */
    public function getRedundancyType()
    {
        return isset($this->redundancy_type) ? $this->redundancy_type : 0;
    }

    public function hasRedundancyType()
    {
        return isset($this->redundancy_type);
    }

    public function clearRedundancyType()
    {
        unset($this->redundancy_type);
    }

    /**
     * Indicates the user-supplied redundancy type of this external VPN gateway.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.ExternalVpnGateway.RedundancyType redundancy_type = 271443740;</code>
     * @param int $var
     * @return $this
     */
    public function setRedundancyType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Compute\V1\ExternalVpnGateway\RedundancyType::class);
        $this->redundancy_type = $var;

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

}

