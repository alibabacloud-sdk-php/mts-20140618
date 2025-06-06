<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Dara\Model;

class SubmitCopyrightJobRequest extends Model
{
    /**
     * @var string
     */
    public $callBack;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $input;

    /**
     * @var int
     */
    public $level;

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
    public $params;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $totalTime;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'callBack' => 'CallBack',
        'description' => 'Description',
        'input' => 'Input',
        'level' => 'Level',
        'message' => 'Message',
        'output' => 'Output',
        'params' => 'Params',
        'startTime' => 'StartTime',
        'totalTime' => 'TotalTime',
        'url' => 'Url',
        'userData' => 'UserData',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callBack) {
            $res['CallBack'] = $this->callBack;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->input) {
            $res['Input'] = $this->input;
        }

        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }

        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->totalTime) {
            $res['TotalTime'] = $this->totalTime;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallBack'])) {
            $model->callBack = $map['CallBack'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Input'])) {
            $model->input = $map['Input'];
        }

        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }

        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['TotalTime'])) {
            $model->totalTime = $map['TotalTime'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
