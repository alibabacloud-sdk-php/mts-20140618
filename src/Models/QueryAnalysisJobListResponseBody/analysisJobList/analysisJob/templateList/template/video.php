<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryAnalysisJobListResponseBody\analysisJobList\analysisJob\templateList\template;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryAnalysisJobListResponseBody\analysisJobList\analysisJob\templateList\template\video\bitrateBnd;
use AlibabaCloud\Tea\Model;

class video extends Model
{
    /**
     * @var string
     */
    public $bufsize;

    /**
     * @var string
     */
    public $degrain;

    /**
     * @var bitrateBnd
     */
    public $bitrateBnd;

    /**
     * @var string
     */
    public $pixFmt;

    /**
     * @var string
     */
    public $codec;

    /**
     * @var string
     */
    public $height;

    /**
     * @var string
     */
    public $qscale;

    /**
     * @var string
     */
    public $bitrate;

    /**
     * @var string
     */
    public $maxrate;

    /**
     * @var string
     */
    public $profile;

    /**
     * @var string
     */
    public $crf;

    /**
     * @var string
     */
    public $gop;

    /**
     * @var string
     */
    public $width;

    /**
     * @var string
     */
    public $fps;

    /**
     * @var string
     */
    public $preset;

    /**
     * @var string
     */
    public $scanMode;
    protected $_name = [
        'bufsize'    => 'Bufsize',
        'degrain'    => 'Degrain',
        'bitrateBnd' => 'BitrateBnd',
        'pixFmt'     => 'PixFmt',
        'codec'      => 'Codec',
        'height'     => 'Height',
        'qscale'     => 'Qscale',
        'bitrate'    => 'Bitrate',
        'maxrate'    => 'Maxrate',
        'profile'    => 'Profile',
        'crf'        => 'Crf',
        'gop'        => 'Gop',
        'width'      => 'Width',
        'fps'        => 'Fps',
        'preset'     => 'Preset',
        'scanMode'   => 'ScanMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bufsize) {
            $res['Bufsize'] = $this->bufsize;
        }
        if (null !== $this->degrain) {
            $res['Degrain'] = $this->degrain;
        }
        if (null !== $this->bitrateBnd) {
            $res['BitrateBnd'] = null !== $this->bitrateBnd ? $this->bitrateBnd->toMap() : null;
        }
        if (null !== $this->pixFmt) {
            $res['PixFmt'] = $this->pixFmt;
        }
        if (null !== $this->codec) {
            $res['Codec'] = $this->codec;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->qscale) {
            $res['Qscale'] = $this->qscale;
        }
        if (null !== $this->bitrate) {
            $res['Bitrate'] = $this->bitrate;
        }
        if (null !== $this->maxrate) {
            $res['Maxrate'] = $this->maxrate;
        }
        if (null !== $this->profile) {
            $res['Profile'] = $this->profile;
        }
        if (null !== $this->crf) {
            $res['Crf'] = $this->crf;
        }
        if (null !== $this->gop) {
            $res['Gop'] = $this->gop;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->fps) {
            $res['Fps'] = $this->fps;
        }
        if (null !== $this->preset) {
            $res['Preset'] = $this->preset;
        }
        if (null !== $this->scanMode) {
            $res['ScanMode'] = $this->scanMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return video
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bufsize'])) {
            $model->bufsize = $map['Bufsize'];
        }
        if (isset($map['Degrain'])) {
            $model->degrain = $map['Degrain'];
        }
        if (isset($map['BitrateBnd'])) {
            $model->bitrateBnd = bitrateBnd::fromMap($map['BitrateBnd']);
        }
        if (isset($map['PixFmt'])) {
            $model->pixFmt = $map['PixFmt'];
        }
        if (isset($map['Codec'])) {
            $model->codec = $map['Codec'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Qscale'])) {
            $model->qscale = $map['Qscale'];
        }
        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }
        if (isset($map['Maxrate'])) {
            $model->maxrate = $map['Maxrate'];
        }
        if (isset($map['Profile'])) {
            $model->profile = $map['Profile'];
        }
        if (isset($map['Crf'])) {
            $model->crf = $map['Crf'];
        }
        if (isset($map['Gop'])) {
            $model->gop = $map['Gop'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['Fps'])) {
            $model->fps = $map['Fps'];
        }
        if (isset($map['Preset'])) {
            $model->preset = $map['Preset'];
        }
        if (isset($map['ScanMode'])) {
            $model->scanMode = $map['ScanMode'];
        }

        return $model;
    }
}
