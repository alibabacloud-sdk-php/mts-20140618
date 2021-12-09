<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SubmitURLUploadJobRequest;

use AlibabaCloud\Tea\Model;

class targetStorage extends Model
{
    /**
     * @var string
     */
    public $bucket;

    /**
     * @var string
     */
    public $bucketOwnerId;

    /**
     * @var string
     */
    public $objectKey;

    /**
     * @var string
     */
    public $objectRoleName;

    /**
     * @var string
     */
    public $s3AccessKey;

    /**
     * @var string
     */
    public $s3Endpoint;

    /**
     * @var string
     */
    public $s3Provider;

    /**
     * @var string
     */
    public $s3SecretKey;

    /**
     * @var string
     */
    public $s3SessionToken;
    protected $_name = [
        'bucket'         => 'Bucket',
        'bucketOwnerId'  => 'BucketOwnerId',
        'objectKey'      => 'ObjectKey',
        'objectRoleName' => 'ObjectRoleName',
        's3AccessKey'    => 'S3AccessKey',
        's3Endpoint'     => 'S3Endpoint',
        's3Provider'     => 'S3Provider',
        's3SecretKey'    => 'S3SecretKey',
        's3SessionToken' => 'S3SessionToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
        }
        if (null !== $this->bucketOwnerId) {
            $res['BucketOwnerId'] = $this->bucketOwnerId;
        }
        if (null !== $this->objectKey) {
            $res['ObjectKey'] = $this->objectKey;
        }
        if (null !== $this->objectRoleName) {
            $res['ObjectRoleName'] = $this->objectRoleName;
        }
        if (null !== $this->s3AccessKey) {
            $res['S3AccessKey'] = $this->s3AccessKey;
        }
        if (null !== $this->s3Endpoint) {
            $res['S3Endpoint'] = $this->s3Endpoint;
        }
        if (null !== $this->s3Provider) {
            $res['S3Provider'] = $this->s3Provider;
        }
        if (null !== $this->s3SecretKey) {
            $res['S3SecretKey'] = $this->s3SecretKey;
        }
        if (null !== $this->s3SessionToken) {
            $res['S3SessionToken'] = $this->s3SessionToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return targetStorage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }
        if (isset($map['BucketOwnerId'])) {
            $model->bucketOwnerId = $map['BucketOwnerId'];
        }
        if (isset($map['ObjectKey'])) {
            $model->objectKey = $map['ObjectKey'];
        }
        if (isset($map['ObjectRoleName'])) {
            $model->objectRoleName = $map['ObjectRoleName'];
        }
        if (isset($map['S3AccessKey'])) {
            $model->s3AccessKey = $map['S3AccessKey'];
        }
        if (isset($map['S3Endpoint'])) {
            $model->s3Endpoint = $map['S3Endpoint'];
        }
        if (isset($map['S3Provider'])) {
            $model->s3Provider = $map['S3Provider'];
        }
        if (isset($map['S3SecretKey'])) {
            $model->s3SecretKey = $map['S3SecretKey'];
        }
        if (isset($map['S3SessionToken'])) {
            $model->s3SessionToken = $map['S3SessionToken'];
        }

        return $model;
    }
}
