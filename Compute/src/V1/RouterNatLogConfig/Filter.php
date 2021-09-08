<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\RouterNatLogConfig;

use UnexpectedValueException;

/**
 * Specify the desired filtering of logs on this NAT. If unspecified, logs are exported for all connections handled by this NAT. This option can take one of the following values:
 * - ERRORS_ONLY: Export logs only for connection failures.
 * - TRANSLATIONS_ONLY: Export logs only for successful connections.
 * - ALL: Export logs for all connections, successful and unsuccessful.
 *
 * Protobuf type <code>google.cloud.compute.v1.RouterNatLogConfig.Filter</code>
 */
class Filter
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_FILTER = 0;</code>
     */
    const UNDEFINED_FILTER = 0;
    /**
     * Generated from protobuf enum <code>ALL = 64897;</code>
     */
    const ALL = 64897;
    /**
     * Generated from protobuf enum <code>ERRORS_ONLY = 307484672;</code>
     */
    const ERRORS_ONLY = 307484672;
    /**
     * Generated from protobuf enum <code>TRANSLATIONS_ONLY = 357212649;</code>
     */
    const TRANSLATIONS_ONLY = 357212649;

    private static $valueToName = [
        self::UNDEFINED_FILTER => 'UNDEFINED_FILTER',
        self::ALL => 'ALL',
        self::ERRORS_ONLY => 'ERRORS_ONLY',
        self::TRANSLATIONS_ONLY => 'TRANSLATIONS_ONLY',
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
class_alias(Filter::class, \Google\Cloud\Compute\V1\RouterNatLogConfig_Filter::class);

