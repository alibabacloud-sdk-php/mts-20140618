<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryVideoQualityJobResponseBody;

use AlibabaCloud\Tea\Model;

class job extends Model
{
    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $output;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $userId;

    /**
     * @var string
     */
    public $videoQualityResults;
    protected $_name = [
        'jobId'               => 'JobId',
        'message'             => 'Message',
        'output'              => 'Output',
        'status'              => 'Status',
        'userId'              => 'UserId',
        'videoQualityResults' => 'VideoQualityResults',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->videoQualityResults) {
            $res['VideoQualityResults'] = $this->videoQualityResults;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return job
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['VideoQualityResults'])) {
            $model->videoQualityResults = $map['VideoQualityResults'];
        }

        return $model;
    }
}
