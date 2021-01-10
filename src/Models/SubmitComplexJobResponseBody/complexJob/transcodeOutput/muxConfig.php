<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SubmitComplexJobResponseBody\complexJob\transcodeOutput;

use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitComplexJobResponseBody\complexJob\transcodeOutput\muxConfig\gif;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitComplexJobResponseBody\complexJob\transcodeOutput\muxConfig\segment;
use AlibabaCloud\Tea\Model;

class muxConfig extends Model
{
    /**
     * @var segment
     */
    public $segment;

    /**
     * @var gif
     */
    public $gif;
    protected $_name = [
        'segment' => 'Segment',
        'gif'     => 'Gif',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->segment) {
            $res['Segment'] = null !== $this->segment ? $this->segment->toMap() : null;
        }
        if (null !== $this->gif) {
            $res['Gif'] = null !== $this->gif ? $this->gif->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return muxConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Segment'])) {
            $model->segment = segment::fromMap($map['Segment']);
        }
        if (isset($map['Gif'])) {
            $model->gif = gif::fromMap($map['Gif']);
        }

        return $model;
    }
}
