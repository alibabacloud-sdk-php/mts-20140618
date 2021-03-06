<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryCensorJobListResponseBody\censorJobList\censorJob;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryCensorJobListResponseBody\censorJobList\censorJob\censorConfig\outputFile;
use AlibabaCloud\Tea\Model;

class censorConfig extends Model
{
    /**
     * @var string
     */
    public $interval;

    /**
     * @var string
     */
    public $saveType;

    /**
     * @var outputFile
     */
    public $outputFile;

    /**
     * @var string
     */
    public $scenes;

    /**
     * @var string
     */
    public $bizType;
    protected $_name = [
        'interval'   => 'Interval',
        'saveType'   => 'SaveType',
        'outputFile' => 'OutputFile',
        'scenes'     => 'Scenes',
        'bizType'    => 'BizType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->saveType) {
            $res['SaveType'] = $this->saveType;
        }
        if (null !== $this->outputFile) {
            $res['OutputFile'] = null !== $this->outputFile ? $this->outputFile->toMap() : null;
        }
        if (null !== $this->scenes) {
            $res['Scenes'] = $this->scenes;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return censorConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['SaveType'])) {
            $model->saveType = $map['SaveType'];
        }
        if (isset($map['OutputFile'])) {
            $model->outputFile = outputFile::fromMap($map['OutputFile']);
        }
        if (isset($map['Scenes'])) {
            $model->scenes = $map['Scenes'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        return $model;
    }
}
