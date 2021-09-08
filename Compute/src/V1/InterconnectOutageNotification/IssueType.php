<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\InterconnectOutageNotification;

use UnexpectedValueException;

/**
 * Form this outage is expected to take, which can take one of the following values:
 * - OUTAGE: The Interconnect may be completely out of service for some or all of the specified window.
 * - PARTIAL_OUTAGE: Some circuits comprising the Interconnect as a whole should remain up, but with reduced bandwidth. Note that the versions of this enum prefixed with "IT_" have been deprecated in favor of the unprefixed values.
 *
 * Protobuf type <code>google.cloud.compute.v1.InterconnectOutageNotification.IssueType</code>
 */
class IssueType
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_ISSUE_TYPE = 0;</code>
     */
    const UNDEFINED_ISSUE_TYPE = 0;
    /**
     * Generated from protobuf enum <code>IT_OUTAGE = 175779973;</code>
     */
    const IT_OUTAGE = 175779973;
    /**
     * Generated from protobuf enum <code>IT_PARTIAL_OUTAGE = 92103971;</code>
     */
    const IT_PARTIAL_OUTAGE = 92103971;
    /**
     * Generated from protobuf enum <code>OUTAGE = 195285745;</code>
     */
    const OUTAGE = 195285745;
    /**
     * Generated from protobuf enum <code>PARTIAL_OUTAGE = 147053455;</code>
     */
    const PARTIAL_OUTAGE = 147053455;

    private static $valueToName = [
        self::UNDEFINED_ISSUE_TYPE => 'UNDEFINED_ISSUE_TYPE',
        self::IT_OUTAGE => 'IT_OUTAGE',
        self::IT_PARTIAL_OUTAGE => 'IT_PARTIAL_OUTAGE',
        self::OUTAGE => 'OUTAGE',
        self::PARTIAL_OUTAGE => 'PARTIAL_OUTAGE',
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
class_alias(IssueType::class, \Google\Cloud\Compute\V1\InterconnectOutageNotification_IssueType::class);

