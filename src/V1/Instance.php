<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/parallelstore/v1/parallelstore.proto

namespace Google\Cloud\Parallelstore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Parallelstore instance.
 *
 * Generated from protobuf message <code>google.cloud.parallelstore.v1.Instance</code>
 */
class Instance extends \Google\Protobuf\Internal\Message
{
    /**
     * Identifier. The resource name of the instance, in the format
     * `projects/{project}/locations/{location}/instances/{instance_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     */
    protected $name = '';
    /**
     * Optional. The description of the instance. 2048 characters or less.
     *
     * Generated from protobuf field <code>string description = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $description = '';
    /**
     * Output only. The instance state.
     *
     * Generated from protobuf field <code>.google.cloud.parallelstore.v1.Instance.State state = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;
    /**
     * Output only. The time when the instance was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. The time when the instance was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * Optional. Cloud Labels are a flexible and lightweight mechanism for
     * organizing cloud resources into groups that reflect a customer's
     * organizational needs and deployment strategies. See
     * https://cloud.google.com/resource-manager/docs/labels-overview for details.
     *
     * Generated from protobuf field <code>map<string, string> labels = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;
    /**
     * Required. Immutable. The instance's storage capacity in Gibibytes (GiB).
     * Allowed values are between 12000 and 100000, in multiples of 4000; e.g.,
     * 12000, 16000, 20000, ...
     *
     * Generated from protobuf field <code>int64 capacity_gib = 8 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $capacity_gib = 0;
    /**
     * Deprecated 'daos_version' field.
     * Output only. The version of DAOS software running in the instance.
     *
     * Generated from protobuf field <code>string daos_version = 9 [deprecated = true, (.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @deprecated
     */
    protected $daos_version = '';
    /**
     * Output only. A list of IPv4 addresses used for client side configuration.
     *
     * Generated from protobuf field <code>repeated string access_points = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $access_points;
    /**
     * Optional. Immutable. The name of the Compute Engine
     * [VPC network](https://cloud.google.com/vpc/docs/vpc) to which the
     * instance is connected.
     *
     * Generated from protobuf field <code>string network = 11 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     */
    protected $network = '';
    /**
     * Optional. Immutable. The ID of the IP address range being used by the
     * instance's VPC network. See [Configure a VPC
     * network](https://cloud.google.com/parallelstore/docs/vpc#create_and_configure_the_vpc).
     * If no ID is provided, all ranges are considered.
     *
     * Generated from protobuf field <code>string reserved_ip_range = 12 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     */
    protected $reserved_ip_range = '';
    /**
     * Output only. Immutable. The ID of the IP address range being used by the
     * instance's VPC network. This field is populated by the service and contains
     * the value currently used by the service.
     *
     * Generated from protobuf field <code>string effective_reserved_ip_range = 14 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $effective_reserved_ip_range = '';
    /**
     * Optional. Immutable. Stripe level for files. Allowed values are:
     * * `FILE_STRIPE_LEVEL_MIN`: offers the best performance for small size
     *   files.
     * * `FILE_STRIPE_LEVEL_BALANCED`: balances performance for workloads
     *   involving a mix of small and large files.
     * * `FILE_STRIPE_LEVEL_MAX`: higher throughput performance for larger files.
     *
     * Generated from protobuf field <code>.google.cloud.parallelstore.v1.FileStripeLevel file_stripe_level = 15 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $file_stripe_level = 0;
    /**
     * Optional. Immutable. Stripe level for directories. Allowed values are:
     * * `DIRECTORY_STRIPE_LEVEL_MIN`: recommended when directories contain a
     *   small number of files.
     * * `DIRECTORY_STRIPE_LEVEL_BALANCED`: balances performance for workloads
     *   involving a mix of small and large directories.
     * * `DIRECTORY_STRIPE_LEVEL_MAX`: recommended for directories with a large
     *   number of files.
     *
     * Generated from protobuf field <code>.google.cloud.parallelstore.v1.DirectoryStripeLevel directory_stripe_level = 16 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $directory_stripe_level = 0;
    /**
     * Optional. Immutable. The deployment type of the instance. Allowed values
     * are:
     * * `SCRATCH`: the instance is a scratch instance.
     * * `PERSISTENT`: the instance is a persistent instance.
     *
     * Generated from protobuf field <code>.google.cloud.parallelstore.v1.DeploymentType deployment_type = 17 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $deployment_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Identifier. The resource name of the instance, in the format
     *           `projects/{project}/locations/{location}/instances/{instance_id}`.
     *     @type string $description
     *           Optional. The description of the instance. 2048 characters or less.
     *     @type int $state
     *           Output only. The instance state.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time when the instance was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The time when the instance was updated.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. Cloud Labels are a flexible and lightweight mechanism for
     *           organizing cloud resources into groups that reflect a customer's
     *           organizational needs and deployment strategies. See
     *           https://cloud.google.com/resource-manager/docs/labels-overview for details.
     *     @type int|string $capacity_gib
     *           Required. Immutable. The instance's storage capacity in Gibibytes (GiB).
     *           Allowed values are between 12000 and 100000, in multiples of 4000; e.g.,
     *           12000, 16000, 20000, ...
     *     @type string $daos_version
     *           Deprecated 'daos_version' field.
     *           Output only. The version of DAOS software running in the instance.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $access_points
     *           Output only. A list of IPv4 addresses used for client side configuration.
     *     @type string $network
     *           Optional. Immutable. The name of the Compute Engine
     *           [VPC network](https://cloud.google.com/vpc/docs/vpc) to which the
     *           instance is connected.
     *     @type string $reserved_ip_range
     *           Optional. Immutable. The ID of the IP address range being used by the
     *           instance's VPC network. See [Configure a VPC
     *           network](https://cloud.google.com/parallelstore/docs/vpc#create_and_configure_the_vpc).
     *           If no ID is provided, all ranges are considered.
     *     @type string $effective_reserved_ip_range
     *           Output only. Immutable. The ID of the IP address range being used by the
     *           instance's VPC network. This field is populated by the service and contains
     *           the value currently used by the service.
     *     @type int $file_stripe_level
     *           Optional. Immutable. Stripe level for files. Allowed values are:
     *           * `FILE_STRIPE_LEVEL_MIN`: offers the best performance for small size
     *             files.
     *           * `FILE_STRIPE_LEVEL_BALANCED`: balances performance for workloads
     *             involving a mix of small and large files.
     *           * `FILE_STRIPE_LEVEL_MAX`: higher throughput performance for larger files.
     *     @type int $directory_stripe_level
     *           Optional. Immutable. Stripe level for directories. Allowed values are:
     *           * `DIRECTORY_STRIPE_LEVEL_MIN`: recommended when directories contain a
     *             small number of files.
     *           * `DIRECTORY_STRIPE_LEVEL_BALANCED`: balances performance for workloads
     *             involving a mix of small and large directories.
     *           * `DIRECTORY_STRIPE_LEVEL_MAX`: recommended for directories with a large
     *             number of files.
     *     @type int $deployment_type
     *           Optional. Immutable. The deployment type of the instance. Allowed values
     *           are:
     *           * `SCRATCH`: the instance is a scratch instance.
     *           * `PERSISTENT`: the instance is a persistent instance.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Parallelstore\V1\Parallelstore::initOnce();
        parent::__construct($data);
    }

    /**
     * Identifier. The resource name of the instance, in the format
     * `projects/{project}/locations/{location}/instances/{instance_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Identifier. The resource name of the instance, in the format
     * `projects/{project}/locations/{location}/instances/{instance_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
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
     * Optional. The description of the instance. 2048 characters or less.
     *
     * Generated from protobuf field <code>string description = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. The description of the instance. 2048 characters or less.
     *
     * Generated from protobuf field <code>string description = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Output only. The instance state.
     *
     * Generated from protobuf field <code>.google.cloud.parallelstore.v1.Instance.State state = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The instance state.
     *
     * Generated from protobuf field <code>.google.cloud.parallelstore.v1.Instance.State state = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Parallelstore\V1\Instance\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. The time when the instance was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The time when the instance was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The time when the instance was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The time when the instance was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Optional. Cloud Labels are a flexible and lightweight mechanism for
     * organizing cloud resources into groups that reflect a customer's
     * organizational needs and deployment strategies. See
     * https://cloud.google.com/resource-manager/docs/labels-overview for details.
     *
     * Generated from protobuf field <code>map<string, string> labels = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. Cloud Labels are a flexible and lightweight mechanism for
     * organizing cloud resources into groups that reflect a customer's
     * organizational needs and deployment strategies. See
     * https://cloud.google.com/resource-manager/docs/labels-overview for details.
     *
     * Generated from protobuf field <code>map<string, string> labels = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Required. Immutable. The instance's storage capacity in Gibibytes (GiB).
     * Allowed values are between 12000 and 100000, in multiples of 4000; e.g.,
     * 12000, 16000, 20000, ...
     *
     * Generated from protobuf field <code>int64 capacity_gib = 8 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = REQUIRED];</code>
     * @return int|string
     */
    public function getCapacityGib()
    {
        return $this->capacity_gib;
    }

    /**
     * Required. Immutable. The instance's storage capacity in Gibibytes (GiB).
     * Allowed values are between 12000 and 100000, in multiples of 4000; e.g.,
     * 12000, 16000, 20000, ...
     *
     * Generated from protobuf field <code>int64 capacity_gib = 8 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = REQUIRED];</code>
     * @param int|string $var
     * @return $this
     */
    public function setCapacityGib($var)
    {
        GPBUtil::checkInt64($var);
        $this->capacity_gib = $var;

        return $this;
    }

    /**
     * Deprecated 'daos_version' field.
     * Output only. The version of DAOS software running in the instance.
     *
     * Generated from protobuf field <code>string daos_version = 9 [deprecated = true, (.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     * @deprecated
     */
    public function getDaosVersion()
    {
        @trigger_error('daos_version is deprecated.', E_USER_DEPRECATED);
        return $this->daos_version;
    }

    /**
     * Deprecated 'daos_version' field.
     * Output only. The version of DAOS software running in the instance.
     *
     * Generated from protobuf field <code>string daos_version = 9 [deprecated = true, (.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setDaosVersion($var)
    {
        @trigger_error('daos_version is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, True);
        $this->daos_version = $var;

        return $this;
    }

    /**
     * Output only. A list of IPv4 addresses used for client side configuration.
     *
     * Generated from protobuf field <code>repeated string access_points = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAccessPoints()
    {
        return $this->access_points;
    }

    /**
     * Output only. A list of IPv4 addresses used for client side configuration.
     *
     * Generated from protobuf field <code>repeated string access_points = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAccessPoints($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->access_points = $arr;

        return $this;
    }

    /**
     * Optional. Immutable. The name of the Compute Engine
     * [VPC network](https://cloud.google.com/vpc/docs/vpc) to which the
     * instance is connected.
     *
     * Generated from protobuf field <code>string network = 11 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * Optional. Immutable. The name of the Compute Engine
     * [VPC network](https://cloud.google.com/vpc/docs/vpc) to which the
     * instance is connected.
     *
     * Generated from protobuf field <code>string network = 11 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setNetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->network = $var;

        return $this;
    }

    /**
     * Optional. Immutable. The ID of the IP address range being used by the
     * instance's VPC network. See [Configure a VPC
     * network](https://cloud.google.com/parallelstore/docs/vpc#create_and_configure_the_vpc).
     * If no ID is provided, all ranges are considered.
     *
     * Generated from protobuf field <code>string reserved_ip_range = 12 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getReservedIpRange()
    {
        return $this->reserved_ip_range;
    }

    /**
     * Optional. Immutable. The ID of the IP address range being used by the
     * instance's VPC network. See [Configure a VPC
     * network](https://cloud.google.com/parallelstore/docs/vpc#create_and_configure_the_vpc).
     * If no ID is provided, all ranges are considered.
     *
     * Generated from protobuf field <code>string reserved_ip_range = 12 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setReservedIpRange($var)
    {
        GPBUtil::checkString($var, True);
        $this->reserved_ip_range = $var;

        return $this;
    }

    /**
     * Output only. Immutable. The ID of the IP address range being used by the
     * instance's VPC network. This field is populated by the service and contains
     * the value currently used by the service.
     *
     * Generated from protobuf field <code>string effective_reserved_ip_range = 14 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getEffectiveReservedIpRange()
    {
        return $this->effective_reserved_ip_range;
    }

    /**
     * Output only. Immutable. The ID of the IP address range being used by the
     * instance's VPC network. This field is populated by the service and contains
     * the value currently used by the service.
     *
     * Generated from protobuf field <code>string effective_reserved_ip_range = 14 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setEffectiveReservedIpRange($var)
    {
        GPBUtil::checkString($var, True);
        $this->effective_reserved_ip_range = $var;

        return $this;
    }

    /**
     * Optional. Immutable. Stripe level for files. Allowed values are:
     * * `FILE_STRIPE_LEVEL_MIN`: offers the best performance for small size
     *   files.
     * * `FILE_STRIPE_LEVEL_BALANCED`: balances performance for workloads
     *   involving a mix of small and large files.
     * * `FILE_STRIPE_LEVEL_MAX`: higher throughput performance for larger files.
     *
     * Generated from protobuf field <code>.google.cloud.parallelstore.v1.FileStripeLevel file_stripe_level = 15 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getFileStripeLevel()
    {
        return $this->file_stripe_level;
    }

    /**
     * Optional. Immutable. Stripe level for files. Allowed values are:
     * * `FILE_STRIPE_LEVEL_MIN`: offers the best performance for small size
     *   files.
     * * `FILE_STRIPE_LEVEL_BALANCED`: balances performance for workloads
     *   involving a mix of small and large files.
     * * `FILE_STRIPE_LEVEL_MAX`: higher throughput performance for larger files.
     *
     * Generated from protobuf field <code>.google.cloud.parallelstore.v1.FileStripeLevel file_stripe_level = 15 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setFileStripeLevel($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Parallelstore\V1\FileStripeLevel::class);
        $this->file_stripe_level = $var;

        return $this;
    }

    /**
     * Optional. Immutable. Stripe level for directories. Allowed values are:
     * * `DIRECTORY_STRIPE_LEVEL_MIN`: recommended when directories contain a
     *   small number of files.
     * * `DIRECTORY_STRIPE_LEVEL_BALANCED`: balances performance for workloads
     *   involving a mix of small and large directories.
     * * `DIRECTORY_STRIPE_LEVEL_MAX`: recommended for directories with a large
     *   number of files.
     *
     * Generated from protobuf field <code>.google.cloud.parallelstore.v1.DirectoryStripeLevel directory_stripe_level = 16 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getDirectoryStripeLevel()
    {
        return $this->directory_stripe_level;
    }

    /**
     * Optional. Immutable. Stripe level for directories. Allowed values are:
     * * `DIRECTORY_STRIPE_LEVEL_MIN`: recommended when directories contain a
     *   small number of files.
     * * `DIRECTORY_STRIPE_LEVEL_BALANCED`: balances performance for workloads
     *   involving a mix of small and large directories.
     * * `DIRECTORY_STRIPE_LEVEL_MAX`: recommended for directories with a large
     *   number of files.
     *
     * Generated from protobuf field <code>.google.cloud.parallelstore.v1.DirectoryStripeLevel directory_stripe_level = 16 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setDirectoryStripeLevel($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Parallelstore\V1\DirectoryStripeLevel::class);
        $this->directory_stripe_level = $var;

        return $this;
    }

    /**
     * Optional. Immutable. The deployment type of the instance. Allowed values
     * are:
     * * `SCRATCH`: the instance is a scratch instance.
     * * `PERSISTENT`: the instance is a persistent instance.
     *
     * Generated from protobuf field <code>.google.cloud.parallelstore.v1.DeploymentType deployment_type = 17 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getDeploymentType()
    {
        return $this->deployment_type;
    }

    /**
     * Optional. Immutable. The deployment type of the instance. Allowed values
     * are:
     * * `SCRATCH`: the instance is a scratch instance.
     * * `PERSISTENT`: the instance is a persistent instance.
     *
     * Generated from protobuf field <code>.google.cloud.parallelstore.v1.DeploymentType deployment_type = 17 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setDeploymentType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Parallelstore\V1\DeploymentType::class);
        $this->deployment_type = $var;

        return $this;
    }

}

