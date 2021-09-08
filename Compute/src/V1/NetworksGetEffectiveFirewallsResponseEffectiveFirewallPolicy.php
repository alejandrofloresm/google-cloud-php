<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.NetworksGetEffectiveFirewallsResponseEffectiveFirewallPolicy</code>
 */
class NetworksGetEffectiveFirewallsResponseEffectiveFirewallPolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * [Output Only] Deprecated, please use short name instead. The display name of the firewall policy.
     *
     * Generated from protobuf field <code>string display_name = 4473832;</code>
     */
    protected $display_name = null;
    /**
     * [Output Only] The name of the firewall policy.
     *
     * Generated from protobuf field <code>string name = 3373707;</code>
     */
    protected $name = null;
    /**
     * The rules that apply to the network.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.FirewallPolicyRule rules = 108873975;</code>
     */
    private $rules;
    /**
     * [Output Only] The short name of the firewall policy.
     *
     * Generated from protobuf field <code>string short_name = 492051566;</code>
     */
    protected $short_name = null;
    /**
     * [Output Only] The type of the firewall policy.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.NetworksGetEffectiveFirewallsResponseEffectiveFirewallPolicy.Type type = 3575610;</code>
     */
    protected $type = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $display_name
     *           [Output Only] Deprecated, please use short name instead. The display name of the firewall policy.
     *     @type string $name
     *           [Output Only] The name of the firewall policy.
     *     @type \Google\Cloud\Compute\V1\FirewallPolicyRule[]|\Google\Protobuf\Internal\RepeatedField $rules
     *           The rules that apply to the network.
     *     @type string $short_name
     *           [Output Only] The short name of the firewall policy.
     *     @type int $type
     *           [Output Only] The type of the firewall policy.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * [Output Only] Deprecated, please use short name instead. The display name of the firewall policy.
     *
     * Generated from protobuf field <code>string display_name = 4473832;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return isset($this->display_name) ? $this->display_name : '';
    }

    public function hasDisplayName()
    {
        return isset($this->display_name);
    }

    public function clearDisplayName()
    {
        unset($this->display_name);
    }

    /**
     * [Output Only] Deprecated, please use short name instead. The display name of the firewall policy.
     *
     * Generated from protobuf field <code>string display_name = 4473832;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * [Output Only] The name of the firewall policy.
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
     * [Output Only] The name of the firewall policy.
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
     * The rules that apply to the network.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.FirewallPolicyRule rules = 108873975;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRules()
    {
        return $this->rules;
    }

    /**
     * The rules that apply to the network.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.FirewallPolicyRule rules = 108873975;</code>
     * @param \Google\Cloud\Compute\V1\FirewallPolicyRule[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRules($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\FirewallPolicyRule::class);
        $this->rules = $arr;

        return $this;
    }

    /**
     * [Output Only] The short name of the firewall policy.
     *
     * Generated from protobuf field <code>string short_name = 492051566;</code>
     * @return string
     */
    public function getShortName()
    {
        return isset($this->short_name) ? $this->short_name : '';
    }

    public function hasShortName()
    {
        return isset($this->short_name);
    }

    public function clearShortName()
    {
        unset($this->short_name);
    }

    /**
     * [Output Only] The short name of the firewall policy.
     *
     * Generated from protobuf field <code>string short_name = 492051566;</code>
     * @param string $var
     * @return $this
     */
    public function setShortName($var)
    {
        GPBUtil::checkString($var, True);
        $this->short_name = $var;

        return $this;
    }

    /**
     * [Output Only] The type of the firewall policy.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.NetworksGetEffectiveFirewallsResponseEffectiveFirewallPolicy.Type type = 3575610;</code>
     * @return int
     */
    public function getType()
    {
        return isset($this->type) ? $this->type : 0;
    }

    public function hasType()
    {
        return isset($this->type);
    }

    public function clearType()
    {
        unset($this->type);
    }

    /**
     * [Output Only] The type of the firewall policy.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.NetworksGetEffectiveFirewallsResponseEffectiveFirewallPolicy.Type type = 3575610;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Compute\V1\NetworksGetEffectiveFirewallsResponseEffectiveFirewallPolicy\Type::class);
        $this->type = $var;

        return $this;
    }

}

