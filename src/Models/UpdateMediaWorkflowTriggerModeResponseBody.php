<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\UpdateMediaWorkflowTriggerModeResponseBody\mediaWorkflow;
use AlibabaCloud\Tea\Model;

class UpdateMediaWorkflowTriggerModeResponseBody extends Model
{
    /**
     * @description The information about the media workflow.
     *
     * @var mediaWorkflow
     */
    public $mediaWorkflow;

    /**
     * @description The ID of the request.
     *
     * @example 16CD0CDD-457E-420D-9755-8385075A1234
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'mediaWorkflow' => 'MediaWorkflow',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaWorkflow) {
            $res['MediaWorkflow'] = null !== $this->mediaWorkflow ? $this->mediaWorkflow->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateMediaWorkflowTriggerModeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaWorkflow'])) {
            $model->mediaWorkflow = mediaWorkflow::fromMap($map['MediaWorkflow']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
