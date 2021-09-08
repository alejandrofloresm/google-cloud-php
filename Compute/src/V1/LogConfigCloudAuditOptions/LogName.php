<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\LogConfigCloudAuditOptions;

use UnexpectedValueException;

/**
 * The log_name to populate in the Cloud Audit Record.
 *
 * Protobuf type <code>google.cloud.compute.v1.LogConfigCloudAuditOptions.LogName</code>
 */
class LogName
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_LOG_NAME = 0;</code>
     */
    const UNDEFINED_LOG_NAME = 0;
    /**
     * Generated from protobuf enum <code>ADMIN_ACTIVITY = 427503135;</code>
     */
    const ADMIN_ACTIVITY = 427503135;
    /**
     * Generated from protobuf enum <code>DATA_ACCESS = 238070681;</code>
     */
    const DATA_ACCESS = 238070681;
    /**
     * Generated from protobuf enum <code>UNSPECIFIED_LOG_NAME = 410515182;</code>
     */
    const UNSPECIFIED_LOG_NAME = 410515182;

    private static $valueToName = [
        self::UNDEFINED_LOG_NAME => 'UNDEFINED_LOG_NAME',
        self::ADMIN_ACTIVITY => 'ADMIN_ACTIVITY',
        self::DATA_ACCESS => 'DATA_ACCESS',
        self::UNSPECIFIED_LOG_NAME => 'UNSPECIFIED_LOG_NAME',
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
class_alias(LogName::class, \Google\Cloud\Compute\V1\LogConfigCloudAuditOptions_LogName::class);

