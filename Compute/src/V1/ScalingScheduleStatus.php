<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.ScalingScheduleStatus</code>
 */
class ScalingScheduleStatus extends \Google\Protobuf\Internal\Message
{
    /**
     * [Output Only] The last time the scaling schedule became active. Note: this is a timestamp when a schedule actually became active, not when it was planned to do so. The timestamp is in RFC3339 text format.
     *
     * Generated from protobuf field <code>string last_start_time = 34545107;</code>
     */
    protected $last_start_time = null;
    /**
     * [Output Only] The next time the scaling schedule is to become active. Note: this is a timestamp when a schedule is planned to run, but the actual time might be slightly different. The timestamp is in RFC3339 text format.
     *
     * Generated from protobuf field <code>string next_start_time = 97270102;</code>
     */
    protected $next_start_time = null;
    /**
     * [Output Only] The current state of a scaling schedule.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.ScalingScheduleStatus.State state = 109757585;</code>
     */
    protected $state = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $last_start_time
     *           [Output Only] The last time the scaling schedule became active. Note: this is a timestamp when a schedule actually became active, not when it was planned to do so. The timestamp is in RFC3339 text format.
     *     @type string $next_start_time
     *           [Output Only] The next time the scaling schedule is to become active. Note: this is a timestamp when a schedule is planned to run, but the actual time might be slightly different. The timestamp is in RFC3339 text format.
     *     @type int $state
     *           [Output Only] The current state of a scaling schedule.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * [Output Only] The last time the scaling schedule became active. Note: this is a timestamp when a schedule actually became active, not when it was planned to do so. The timestamp is in RFC3339 text format.
     *
     * Generated from protobuf field <code>string last_start_time = 34545107;</code>
     * @return string
     */
    public function getLastStartTime()
    {
        return isset($this->last_start_time) ? $this->last_start_time : '';
    }

    public function hasLastStartTime()
    {
        return isset($this->last_start_time);
    }

    public function clearLastStartTime()
    {
        unset($this->last_start_time);
    }

    /**
     * [Output Only] The last time the scaling schedule became active. Note: this is a timestamp when a schedule actually became active, not when it was planned to do so. The timestamp is in RFC3339 text format.
     *
     * Generated from protobuf field <code>string last_start_time = 34545107;</code>
     * @param string $var
     * @return $this
     */
    public function setLastStartTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->last_start_time = $var;

        return $this;
    }

    /**
     * [Output Only] The next time the scaling schedule is to become active. Note: this is a timestamp when a schedule is planned to run, but the actual time might be slightly different. The timestamp is in RFC3339 text format.
     *
     * Generated from protobuf field <code>string next_start_time = 97270102;</code>
     * @return string
     */
    public function getNextStartTime()
    {
        return isset($this->next_start_time) ? $this->next_start_time : '';
    }

    public function hasNextStartTime()
    {
        return isset($this->next_start_time);
    }

    public function clearNextStartTime()
    {
        unset($this->next_start_time);
    }

    /**
     * [Output Only] The next time the scaling schedule is to become active. Note: this is a timestamp when a schedule is planned to run, but the actual time might be slightly different. The timestamp is in RFC3339 text format.
     *
     * Generated from protobuf field <code>string next_start_time = 97270102;</code>
     * @param string $var
     * @return $this
     */
    public function setNextStartTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_start_time = $var;

        return $this;
    }

    /**
     * [Output Only] The current state of a scaling schedule.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.ScalingScheduleStatus.State state = 109757585;</code>
     * @return int
     */
    public function getState()
    {
        return isset($this->state) ? $this->state : 0;
    }

    public function hasState()
    {
        return isset($this->state);
    }

    public function clearState()
    {
        unset($this->state);
    }

    /**
     * [Output Only] The current state of a scaling schedule.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.ScalingScheduleStatus.State state = 109757585;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Compute\V1\ScalingScheduleStatus\State::class);
        $this->state = $var;

        return $this;
    }

}

