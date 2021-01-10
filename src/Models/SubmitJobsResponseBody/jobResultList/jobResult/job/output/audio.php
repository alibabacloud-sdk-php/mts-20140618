<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SubmitJobsResponseBody\jobResultList\jobResult\job\output;

use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitJobsResponseBody\jobResultList\jobResult\job\output\audio\volume;
use AlibabaCloud\Tea\Model;

class audio extends Model
{
    /**
     * @var string
     */
    public $profile;

    /**
     * @var string
     */
    public $codec;

    /**
     * @var string
     */
    public $samplerate;

    /**
     * @var string
     */
    public $qscale;

    /**
     * @var string
     */
    public $channels;

    /**
     * @var volume
     */
    public $volume;

    /**
     * @var string
     */
    public $bitrate;
    protected $_name = [
        'profile'    => 'Profile',
        'codec'      => 'Codec',
        'samplerate' => 'Samplerate',
        'qscale'     => 'Qscale',
        'channels'   => 'Channels',
        'volume'     => 'Volume',
        'bitrate'    => 'Bitrate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->profile) {
            $res['Profile'] = $this->profile;
        }
        if (null !== $this->codec) {
            $res['Codec'] = $this->codec;
        }
        if (null !== $this->samplerate) {
            $res['Samplerate'] = $this->samplerate;
        }
        if (null !== $this->qscale) {
            $res['Qscale'] = $this->qscale;
        }
        if (null !== $this->channels) {
            $res['Channels'] = $this->channels;
        }
        if (null !== $this->volume) {
            $res['Volume'] = null !== $this->volume ? $this->volume->toMap() : null;
        }
        if (null !== $this->bitrate) {
            $res['Bitrate'] = $this->bitrate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return audio
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Profile'])) {
            $model->profile = $map['Profile'];
        }
        if (isset($map['Codec'])) {
            $model->codec = $map['Codec'];
        }
        if (isset($map['Samplerate'])) {
            $model->samplerate = $map['Samplerate'];
        }
        if (isset($map['Qscale'])) {
            $model->qscale = $map['Qscale'];
        }
        if (isset($map['Channels'])) {
            $model->channels = $map['Channels'];
        }
        if (isset($map['Volume'])) {
            $model->volume = volume::fromMap($map['Volume']);
        }
        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }

        return $model;
    }
}
