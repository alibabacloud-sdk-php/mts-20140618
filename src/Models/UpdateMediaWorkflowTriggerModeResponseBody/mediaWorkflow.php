<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\UpdateMediaWorkflowTriggerModeResponseBody;

use AlibabaCloud\Tea\Model;

class mediaWorkflow extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $mediaWorkflowId;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $triggerMode;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $topology;
    protected $_name = [
        'creationTime'    => 'CreationTime',
        'mediaWorkflowId' => 'MediaWorkflowId',
        'state'           => 'State',
        'triggerMode'     => 'TriggerMode',
        'name'            => 'Name',
        'topology'        => 'Topology',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->mediaWorkflowId) {
            $res['MediaWorkflowId'] = $this->mediaWorkflowId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->triggerMode) {
            $res['TriggerMode'] = $this->triggerMode;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->topology) {
            $res['Topology'] = $this->topology;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mediaWorkflow
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['MediaWorkflowId'])) {
            $model->mediaWorkflowId = $map['MediaWorkflowId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['TriggerMode'])) {
            $model->triggerMode = $map['TriggerMode'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Topology'])) {
            $model->topology = $map['Topology'];
        }

        return $model;
    }
}