<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaListResponseBody\mediaList\media\summaryList;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaListResponseBody\mediaList\media\summaryList\summary\file;
use AlibabaCloud\Tea\Model;

class summary extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $mediaWorkflowId;

    /**
     * @var string
     */
    public $activityName;

    /**
     * @var string
     */
    public $mediaWorkflowName;

    /**
     * @var file
     */
    public $file;
    protected $_name = [
        'type'              => 'Type',
        'mediaWorkflowId'   => 'MediaWorkflowId',
        'activityName'      => 'ActivityName',
        'mediaWorkflowName' => 'MediaWorkflowName',
        'file'              => 'File',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->mediaWorkflowId) {
            $res['MediaWorkflowId'] = $this->mediaWorkflowId;
        }
        if (null !== $this->activityName) {
            $res['ActivityName'] = $this->activityName;
        }
        if (null !== $this->mediaWorkflowName) {
            $res['MediaWorkflowName'] = $this->mediaWorkflowName;
        }
        if (null !== $this->file) {
            $res['File'] = null !== $this->file ? $this->file->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return summary
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['MediaWorkflowId'])) {
            $model->mediaWorkflowId = $map['MediaWorkflowId'];
        }
        if (isset($map['ActivityName'])) {
            $model->activityName = $map['ActivityName'];
        }
        if (isset($map['MediaWorkflowName'])) {
            $model->mediaWorkflowName = $map['MediaWorkflowName'];
        }
        if (isset($map['File'])) {
            $model->file = file::fromMap($map['File']);
        }

        return $model;
    }
}
