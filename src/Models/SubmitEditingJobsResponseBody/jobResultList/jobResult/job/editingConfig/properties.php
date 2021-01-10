<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SubmitEditingJobsResponseBody\jobResultList\jobResult\job\editingConfig;

use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitEditingJobsResponseBody\jobResultList\jobResult\job\editingConfig\properties\format;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitEditingJobsResponseBody\jobResultList\jobResult\job\editingConfig\properties\streams;
use AlibabaCloud\Tea\Model;

class properties extends Model
{
    /**
     * @var string
     */
    public $width;

    /**
     * @var string
     */
    public $height;

    /**
     * @var string
     */
    public $bitrate;

    /**
     * @var string
     */
    public $duration;

    /**
     * @var string
     */
    public $fps;

    /**
     * @var string
     */
    public $fileSize;

    /**
     * @var string
     */
    public $fileFormat;

    /**
     * @var streams
     */
    public $streams;

    /**
     * @var format
     */
    public $format;
    protected $_name = [
        'width'      => 'Width',
        'height'     => 'Height',
        'bitrate'    => 'Bitrate',
        'duration'   => 'Duration',
        'fps'        => 'Fps',
        'fileSize'   => 'FileSize',
        'fileFormat' => 'FileFormat',
        'streams'    => 'Streams',
        'format'     => 'Format',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->bitrate) {
            $res['Bitrate'] = $this->bitrate;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->fps) {
            $res['Fps'] = $this->fps;
        }
        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }
        if (null !== $this->fileFormat) {
            $res['FileFormat'] = $this->fileFormat;
        }
        if (null !== $this->streams) {
            $res['Streams'] = null !== $this->streams ? $this->streams->toMap() : null;
        }
        if (null !== $this->format) {
            $res['Format'] = null !== $this->format ? $this->format->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return properties
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Fps'])) {
            $model->fps = $map['Fps'];
        }
        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }
        if (isset($map['FileFormat'])) {
            $model->fileFormat = $map['FileFormat'];
        }
        if (isset($map['Streams'])) {
            $model->streams = streams::fromMap($map['Streams']);
        }
        if (isset($map['Format'])) {
            $model->format = format::fromMap($map['Format']);
        }

        return $model;
    }
}
