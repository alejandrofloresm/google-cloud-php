<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\InterconnectAttachment;

use UnexpectedValueException;

/**
 * [Output Only] The current status of whether or not this interconnect attachment is functional, which can take one of the following values:
 * - OS_ACTIVE: The attachment has been turned up and is ready to use.
 * - OS_UNPROVISIONED: The attachment is not ready to use yet, because turnup is not complete.
 *
 * Protobuf type <code>google.cloud.compute.v1.InterconnectAttachment.OperationalStatus</code>
 */
class OperationalStatus
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_OPERATIONAL_STATUS = 0;</code>
     */
    const UNDEFINED_OPERATIONAL_STATUS = 0;
    /**
     * Generated from protobuf enum <code>OS_ACTIVE = 55721409;</code>
     */
    const OS_ACTIVE = 55721409;
    /**
     * Generated from protobuf enum <code>OS_UNPROVISIONED = 239771840;</code>
     */
    const OS_UNPROVISIONED = 239771840;

    private static $valueToName = [
        self::UNDEFINED_OPERATIONAL_STATUS => 'UNDEFINED_OPERATIONAL_STATUS',
        self::OS_ACTIVE => 'OS_ACTIVE',
        self::OS_UNPROVISIONED => 'OS_UNPROVISIONED',
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
class_alias(OperationalStatus::class, \Google\Cloud\Compute\V1\InterconnectAttachment_OperationalStatus::class);

