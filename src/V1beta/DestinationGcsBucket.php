<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/parallelstore/v1beta/parallelstore.proto

namespace Google\Cloud\Parallelstore\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Google Cloud Storage as a destination.
 *
 * Generated from protobuf message <code>google.cloud.parallelstore.v1beta.DestinationGcsBucket</code>
 */
class DestinationGcsBucket extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. URI to a Cloud Storage object in format:
     * 'gs://<bucket_name>/<path_inside_bucket>'.
     *
     * Generated from protobuf field <code>string uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $uri = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $uri
     *           Required. URI to a Cloud Storage object in format:
     *           'gs://<bucket_name>/<path_inside_bucket>'.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Parallelstore\V1Beta\Parallelstore::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. URI to a Cloud Storage object in format:
     * 'gs://<bucket_name>/<path_inside_bucket>'.
     *
     * Generated from protobuf field <code>string uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Required. URI to a Cloud Storage object in format:
     * 'gs://<bucket_name>/<path_inside_bucket>'.
     *
     * Generated from protobuf field <code>string uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->uri = $var;

        return $this;
    }

}

