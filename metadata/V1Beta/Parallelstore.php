<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/parallelstore/v1beta/parallelstore.proto

namespace GPBMetadata\Google\Cloud\Parallelstore\V1Beta;

class Parallelstore
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\FieldInfo::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�:
5google/cloud/parallelstore/v1beta/parallelstore.proto!google.cloud.parallelstore.v1betagoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/field_info.protogoogle/api/resource.proto#google/longrunning/operations.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto"�
Instance
name (	B�A
description (	B�AE
state (21.google.cloud.parallelstore.v1beta.Instance.StateB�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�AL
labels (27.google.cloud.parallelstore.v1beta.Instance.LabelsEntryB�A
capacity_gib (B�A�A
daos_version	 (	B�A
access_points
 (	B�A:
network (	B)�A�A�A 
compute.googleapis.com/NetworkD
reserved_ip_range (	B)�A�A�A 
compute.googleapis.com/AddressN
effective_reserved_ip_range (	B)�A�A�A 
compute.googleapis.com/AddressR
file_stripe_level (22.google.cloud.parallelstore.v1beta.FileStripeLevelB�A\\
directory_stripe_level (27.google.cloud.parallelstore.v1beta.DirectoryStripeLevelB�A-
LabelsEntry
key (	
value (	:8"a
State
STATE_UNSPECIFIED 
CREATING

ACTIVE
DELETING

FAILED
	UPGRADING:}�Az
%parallelstore.googleapis.com/Instance<projects/{project}/locations/{location}/instances/{instance}*	instances2instance"�
ListInstancesRequest=
parent (	B-�A�A\'%parallelstore.googleapis.com/Instance
	page_size (B�A

page_token (	B�A
filter (	B�A
order_by (	B�A"�
ListInstancesResponse>
	instances (2+.google.cloud.parallelstore.v1beta.Instance
next_page_token (	
unreachable (	"Q
GetInstanceRequest;
name (	B-�A�A\'
%parallelstore.googleapis.com/Instance"�
CreateInstanceRequest=
parent (	B-�A�A\'%parallelstore.googleapis.com/Instance
instance_id (	B�AB
instance (2+.google.cloud.parallelstore.v1beta.InstanceB�A

request_id (	B�A"�
UpdateInstanceRequest4
update_mask (2.google.protobuf.FieldMaskB�AB
instance (2+.google.cloud.parallelstore.v1beta.InstanceB�A

request_id (	B�A"m
DeleteInstanceRequest;
name (	B-�A�A\'
%parallelstore.googleapis.com/Instance

request_id (	B�A"�
OperationMetadata4
create_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A
target (	B�A
verb (	B�A
status_message (	B�A#
requested_cancellation (B�A
api_version (	B�A"#
SourceGcsBucket
uri (	B�A"(
DestinationGcsBucket
uri (	B�A"(
SourceParallelstore
path (	B�A"-
DestinationParallelstore
path (	B�A"�
ImportDataRequestO
source_gcs_bucket (22.google.cloud.parallelstore.v1beta.SourceGcsBucketH `
destination_parallelstore (2;.google.cloud.parallelstore.v1beta.DestinationParallelstoreH;
name (	B-�A�A\'
%parallelstore.googleapis.com/Instance

request_id (	B�A���B
service_account (	B)�A�A#
!iam.googleapis.com/ServiceAccountB
sourceB
destination"�
ExportDataRequestV
source_parallelstore (26.google.cloud.parallelstore.v1beta.SourceParallelstoreH Y
destination_gcs_bucket (27.google.cloud.parallelstore.v1beta.DestinationGcsBucketH;
name (	B-�A�A\'
%parallelstore.googleapis.com/Instance

request_id (	B�A���B
service_account (	B)�A�A#
!iam.googleapis.com/ServiceAccountB
sourceB
destination"
ImportDataResponse"�
ImportDataMetadataX
operation_metadata (2<.google.cloud.parallelstore.v1beta.TransferOperationMetadata4
create_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A
target (	B�A
verb (	B�A
status_message (	B�A#
requested_cancellation (B�A
api_version (	B�A"
ExportDataResponse"�
ExportDataMetadataX
operation_metadata (2<.google.cloud.parallelstore.v1beta.TransferOperationMetadata4
create_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A
target (	B�A
verb (	B�A
status_message (	B�A#
requested_cancellation (B�A
api_version (	B�A"�
TransferOperationMetadata[
source_parallelstore (26.google.cloud.parallelstore.v1beta.SourceParallelstoreB�AH T
source_gcs_bucket (22.google.cloud.parallelstore.v1beta.SourceGcsBucketB�AH ^
destination_gcs_bucket	 (27.google.cloud.parallelstore.v1beta.DestinationGcsBucketB�AHe
destination_parallelstore
 (2;.google.cloud.parallelstore.v1beta.DestinationParallelstoreB�AHJ
counters (23.google.cloud.parallelstore.v1beta.TransferCountersB�AK
transfer_type (2/.google.cloud.parallelstore.v1beta.TransferTypeB�AB
sourceB
destination"�
TransferCounters
objects_found (
bytes_found (
objects_skipped (
bytes_skipped (
objects_copied (
bytes_copied (*E
TransferType
TRANSFER_TYPE_UNSPECIFIED 

IMPORT

EXPORT*�
FileStripeLevel!
FILE_STRIPE_LEVEL_UNSPECIFIED 
FILE_STRIPE_LEVEL_MIN
FILE_STRIPE_LEVEL_BALANCED
FILE_STRIPE_LEVEL_MAX*�
DirectoryStripeLevel&
"DIRECTORY_STRIPE_LEVEL_UNSPECIFIED 
DIRECTORY_STRIPE_LEVEL_MIN#
DIRECTORY_STRIPE_LEVEL_BALANCED
DIRECTORY_STRIPE_LEVEL_MAX2�
Parallelstore�
ListInstances7.google.cloud.parallelstore.v1beta.ListInstancesRequest8.google.cloud.parallelstore.v1beta.ListInstancesResponse"B�Aparent���31/v1beta/{parent=projects/*/locations/*}/instances�
GetInstance5.google.cloud.parallelstore.v1beta.GetInstanceRequest+.google.cloud.parallelstore.v1beta.Instance"@�Aname���31/v1beta/{name=projects/*/locations/*/instances/*}�
CreateInstance8.google.cloud.parallelstore.v1beta.CreateInstanceRequest.google.longrunning.Operation"��A
InstanceOperationMetadata�Aparent,instance,instance_id���="1/v1beta/{parent=projects/*/locations/*}/instances:instance�
UpdateInstance8.google.cloud.parallelstore.v1beta.UpdateInstanceRequest.google.longrunning.Operation"��A
InstanceOperationMetadata�Ainstance,update_mask���F2:/v1beta/{instance.name=projects/*/locations/*/instances/*}:instance�
DeleteInstance8.google.cloud.parallelstore.v1beta.DeleteInstanceRequest.google.longrunning.Operation"m�A*
google.protobuf.EmptyOperationMetadata�Aname���3*1/v1beta/{name=projects/*/locations/*/instances/*}�

ImportData4.google.cloud.parallelstore.v1beta.ImportDataRequest.google.longrunning.Operation"r�A(
ImportDataResponseImportDataMetadata���A"</v1beta/{name=projects/*/locations/*/instances/*}:importData:*�

ExportData4.google.cloud.parallelstore.v1beta.ExportDataRequest.google.longrunning.Operation"r�A(
ExportDataResponseExportDataMetadata���A"</v1beta/{name=projects/*/locations/*/instances/*}:exportData:*P�Aparallelstore.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
%com.google.cloud.parallelstore.v1betaBParallelstoreProtoPZKcloud.google.com/go/parallelstore/apiv1beta/parallelstorepb;parallelstorepb�!Google.Cloud.Parallelstore.V1Beta�!Google\\Cloud\\Parallelstore\\V1beta�$Google::Cloud::Parallelstore::V1beta�AN
compute.googleapis.com/Network,projects/{project}/global/networks/{network}�AY
compute.googleapis.com/Address7projects/{project}/regions/{region}/addresses/{address}�AY
!iam.googleapis.com/ServiceAccount4projects/{project}/serviceAccounts/{service_account}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

