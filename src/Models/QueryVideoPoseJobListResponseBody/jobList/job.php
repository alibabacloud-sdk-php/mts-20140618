<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryVideoPoseJobListResponseBody\jobList;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryVideoPoseJobListResponseBody\jobList\job\input;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryVideoPoseJobListResponseBody\jobList\job\MNSMessageResult;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryVideoPoseJobListResponseBody\jobList\job\outputConfig;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryVideoPoseJobListResponseBody\jobList\job\properties;
use AlibabaCloud\Tea\Model;

class job extends Model
{
    /**
     * @var outputConfig
     */
    public $outputConfig;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var string
     */
    public $pipelineId;

    /**
     * @var MNSMessageResult
     */
    public $MNSMessageResult;

    /**
     * @var input
     */
    public $input;

    /**
     * @var properties
     */
    public $properties;
    protected $_name = [
        'outputConfig'     => 'OutputConfig',
        'state'            => 'State',
        'jobId'            => 'JobId',
        'userData'         => 'UserData',
        'pipelineId'       => 'PipelineId',
        'MNSMessageResult' => 'MNSMessageResult',
        'input'            => 'Input',
        'properties'       => 'Properties',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->outputConfig) {
            $res['OutputConfig'] = null !== $this->outputConfig ? $this->outputConfig->toMap() : null;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }
        if (null !== $this->MNSMessageResult) {
            $res['MNSMessageResult'] = null !== $this->MNSMessageResult ? $this->MNSMessageResult->toMap() : null;
        }
        if (null !== $this->input) {
            $res['Input'] = null !== $this->input ? $this->input->toMap() : null;
        }
        if (null !== $this->properties) {
            $res['Properties'] = null !== $this->properties ? $this->properties->toMap() : null;
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
        if (isset($map['OutputConfig'])) {
            $model->outputConfig = outputConfig::fromMap($map['OutputConfig']);
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }
        if (isset($map['MNSMessageResult'])) {
            $model->MNSMessageResult = MNSMessageResult::fromMap($map['MNSMessageResult']);
        }
        if (isset($map['Input'])) {
            $model->input = input::fromMap($map['Input']);
        }
        if (isset($map['Properties'])) {
            $model->properties = properties::fromMap($map['Properties']);
        }

        return $model;
    }
}
