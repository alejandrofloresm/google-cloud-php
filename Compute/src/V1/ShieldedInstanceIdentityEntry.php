<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Shielded Instance Identity Entry.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.ShieldedInstanceIdentityEntry</code>
 */
class ShieldedInstanceIdentityEntry extends \Google\Protobuf\Internal\Message
{
    /**
     * A PEM-encoded X.509 certificate. This field can be empty.
     *
     * Generated from protobuf field <code>string ek_cert = 450178589;</code>
     */
    protected $ek_cert = null;
    /**
     * A PEM-encoded public key.
     *
     * Generated from protobuf field <code>string ek_pub = 308947940;</code>
     */
    protected $ek_pub = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $ek_cert
     *           A PEM-encoded X.509 certificate. This field can be empty.
     *     @type string $ek_pub
     *           A PEM-encoded public key.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * A PEM-encoded X.509 certificate. This field can be empty.
     *
     * Generated from protobuf field <code>string ek_cert = 450178589;</code>
     * @return string
     */
    public function getEkCert()
    {
        return isset($this->ek_cert) ? $this->ek_cert : '';
    }

    public function hasEkCert()
    {
        return isset($this->ek_cert);
    }

    public function clearEkCert()
    {
        unset($this->ek_cert);
    }

    /**
     * A PEM-encoded X.509 certificate. This field can be empty.
     *
     * Generated from protobuf field <code>string ek_cert = 450178589;</code>
     * @param string $var
     * @return $this
     */
    public function setEkCert($var)
    {
        GPBUtil::checkString($var, True);
        $this->ek_cert = $var;

        return $this;
    }

    /**
     * A PEM-encoded public key.
     *
     * Generated from protobuf field <code>string ek_pub = 308947940;</code>
     * @return string
     */
    public function getEkPub()
    {
        return isset($this->ek_pub) ? $this->ek_pub : '';
    }

    public function hasEkPub()
    {
        return isset($this->ek_pub);
    }

    public function clearEkPub()
    {
        unset($this->ek_pub);
    }

    /**
     * A PEM-encoded public key.
     *
     * Generated from protobuf field <code>string ek_pub = 308947940;</code>
     * @param string $var
     * @return $this
     */
    public function setEkPub($var)
    {
        GPBUtil::checkString($var, True);
        $this->ek_pub = $var;

        return $this;
    }

}

