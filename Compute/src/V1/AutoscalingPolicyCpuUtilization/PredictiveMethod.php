<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\AutoscalingPolicyCpuUtilization;

use UnexpectedValueException;

/**
 * Indicates whether predictive autoscaling based on CPU metric is enabled. Valid values are:
 * * NONE (default). No predictive method is used. The autoscaler scales the group to meet current demand based on real-time metrics. * OPTIMIZE_AVAILABILITY. Predictive autoscaling improves availability by monitoring daily and weekly load patterns and scaling out ahead of anticipated demand.
 *
 * Protobuf type <code>google.cloud.compute.v1.AutoscalingPolicyCpuUtilization.PredictiveMethod</code>
 */
class PredictiveMethod
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_PREDICTIVE_METHOD = 0;</code>
     */
    const UNDEFINED_PREDICTIVE_METHOD = 0;
    /**
     * Generated from protobuf enum <code>NONE = 2402104;</code>
     */
    const NONE = 2402104;
    /**
     * Generated from protobuf enum <code>OPTIMIZE_AVAILABILITY = 11629437;</code>
     */
    const OPTIMIZE_AVAILABILITY = 11629437;

    private static $valueToName = [
        self::UNDEFINED_PREDICTIVE_METHOD => 'UNDEFINED_PREDICTIVE_METHOD',
        self::NONE => 'NONE',
        self::OPTIMIZE_AVAILABILITY => 'OPTIMIZE_AVAILABILITY',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PredictiveMethod::class, \Google\Cloud\Compute\V1\AutoscalingPolicyCpuUtilization_PredictiveMethod::class);

