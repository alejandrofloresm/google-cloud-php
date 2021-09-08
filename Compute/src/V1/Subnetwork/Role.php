<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\Subnetwork;

use UnexpectedValueException;

/**
 * The role of subnetwork. Currently, this field is only used when purpose = INTERNAL_HTTPS_LOAD_BALANCER. The value can be set to ACTIVE or BACKUP. An ACTIVE subnetwork is one that is currently being used for Internal HTTP(S) Load Balancing. A BACKUP subnetwork is one that is ready to be promoted to ACTIVE or is currently draining. This field can be updated with a patch request.
 *
 * Protobuf type <code>google.cloud.compute.v1.Subnetwork.Role</code>
 */
class Role
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_ROLE = 0;</code>
     */
    const UNDEFINED_ROLE = 0;
    /**
     * Generated from protobuf enum <code>ACTIVE = 314733318;</code>
     */
    const ACTIVE = 314733318;
    /**
     * Generated from protobuf enum <code>BACKUP = 341010882;</code>
     */
    const BACKUP = 341010882;

    private static $valueToName = [
        self::UNDEFINED_ROLE => 'UNDEFINED_ROLE',
        self::ACTIVE => 'ACTIVE',
        self::BACKUP => 'BACKUP',
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
class_alias(Role::class, \Google\Cloud\Compute\V1\Subnetwork_Role::class);

