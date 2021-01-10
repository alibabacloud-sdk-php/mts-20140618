<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SubmitEditingJobsResponseBody\jobResultList\jobResult\job;

use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitEditingJobsResponseBody\jobResultList\jobResult\job\editingConfig\audio;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitEditingJobsResponseBody\jobResultList\jobResult\job\editingConfig\clip;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitEditingJobsResponseBody\jobResultList\jobResult\job\editingConfig\container;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitEditingJobsResponseBody\jobResultList\jobResult\job\editingConfig\digiWaterMark;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitEditingJobsResponseBody\jobResultList\jobResult\job\editingConfig\editing;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitEditingJobsResponseBody\jobResultList\jobResult\job\editingConfig\encryption;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitEditingJobsResponseBody\jobResultList\jobResult\job\editingConfig\m3U8NonStandardSupport;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitEditingJobsResponseBody\jobResultList\jobResult\job\editingConfig\mergeList;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitEditingJobsResponseBody\jobResultList\jobResult\job\editingConfig\muxConfig;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitEditingJobsResponseBody\jobResultList\jobResult\job\editingConfig\outputFile;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitEditingJobsResponseBody\jobResultList\jobResult\job\editingConfig\properties;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitEditingJobsResponseBody\jobResultList\jobResult\job\editingConfig\subtitleConfig;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitEditingJobsResponseBody\jobResultList\jobResult\job\editingConfig\superReso;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitEditingJobsResponseBody\jobResultList\jobResult\job\editingConfig\transConfig;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitEditingJobsResponseBody\jobResultList\jobResult\job\editingConfig\video;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitEditingJobsResponseBody\jobResultList\jobResult\job\editingConfig\waterMarkList;
use AlibabaCloud\Tea\Model;

class editingConfig extends Model
{
    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var string
     */
    public $rotate;

    /**
     * @var string
     */
    public $videoStreamMap;

    /**
     * @var string
     */
    public $audioStreamMap;

    /**
     * @var string
     */
    public $deWatermark;

    /**
     * @var string
     */
    public $priority;

    /**
     * @var string
     */
    public $waterMarkConfigUrl;

    /**
     * @var string
     */
    public $mergeConfigUrl;

    /**
     * @var waterMarkList
     */
    public $waterMarkList;

    /**
     * @var mergeList
     */
    public $mergeList;

    /**
     * @var digiWaterMark
     */
    public $digiWaterMark;

    /**
     * @var outputFile
     */
    public $outputFile;

    /**
     * @var m3U8NonStandardSupport
     */
    public $m3U8NonStandardSupport;

    /**
     * @var properties
     */
    public $properties;

    /**
     * @var clip
     */
    public $clip;

    /**
     * @var superReso
     */
    public $superReso;

    /**
     * @var subtitleConfig
     */
    public $subtitleConfig;

    /**
     * @var transConfig
     */
    public $transConfig;

    /**
     * @var muxConfig
     */
    public $muxConfig;

    /**
     * @var audio
     */
    public $audio;

    /**
     * @var video
     */
    public $video;

    /**
     * @var container
     */
    public $container;

    /**
     * @var encryption
     */
    public $encryption;

    /**
     * @var editing
     */
    public $editing;
    protected $_name = [
        'templateId'             => 'TemplateId',
        'userData'               => 'UserData',
        'rotate'                 => 'Rotate',
        'videoStreamMap'         => 'VideoStreamMap',
        'audioStreamMap'         => 'AudioStreamMap',
        'deWatermark'            => 'DeWatermark',
        'priority'               => 'Priority',
        'waterMarkConfigUrl'     => 'WaterMarkConfigUrl',
        'mergeConfigUrl'         => 'MergeConfigUrl',
        'waterMarkList'          => 'WaterMarkList',
        'mergeList'              => 'MergeList',
        'digiWaterMark'          => 'DigiWaterMark',
        'outputFile'             => 'OutputFile',
        'm3U8NonStandardSupport' => 'M3U8NonStandardSupport',
        'properties'             => 'Properties',
        'clip'                   => 'Clip',
        'superReso'              => 'SuperReso',
        'subtitleConfig'         => 'SubtitleConfig',
        'transConfig'            => 'TransConfig',
        'muxConfig'              => 'MuxConfig',
        'audio'                  => 'Audio',
        'video'                  => 'Video',
        'container'              => 'Container',
        'encryption'             => 'Encryption',
        'editing'                => 'Editing',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->rotate) {
            $res['Rotate'] = $this->rotate;
        }
        if (null !== $this->videoStreamMap) {
            $res['VideoStreamMap'] = $this->videoStreamMap;
        }
        if (null !== $this->audioStreamMap) {
            $res['AudioStreamMap'] = $this->audioStreamMap;
        }
        if (null !== $this->deWatermark) {
            $res['DeWatermark'] = $this->deWatermark;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->waterMarkConfigUrl) {
            $res['WaterMarkConfigUrl'] = $this->waterMarkConfigUrl;
        }
        if (null !== $this->mergeConfigUrl) {
            $res['MergeConfigUrl'] = $this->mergeConfigUrl;
        }
        if (null !== $this->waterMarkList) {
            $res['WaterMarkList'] = null !== $this->waterMarkList ? $this->waterMarkList->toMap() : null;
        }
        if (null !== $this->mergeList) {
            $res['MergeList'] = null !== $this->mergeList ? $this->mergeList->toMap() : null;
        }
        if (null !== $this->digiWaterMark) {
            $res['DigiWaterMark'] = null !== $this->digiWaterMark ? $this->digiWaterMark->toMap() : null;
        }
        if (null !== $this->outputFile) {
            $res['OutputFile'] = null !== $this->outputFile ? $this->outputFile->toMap() : null;
        }
        if (null !== $this->m3U8NonStandardSupport) {
            $res['M3U8NonStandardSupport'] = null !== $this->m3U8NonStandardSupport ? $this->m3U8NonStandardSupport->toMap() : null;
        }
        if (null !== $this->properties) {
            $res['Properties'] = null !== $this->properties ? $this->properties->toMap() : null;
        }
        if (null !== $this->clip) {
            $res['Clip'] = null !== $this->clip ? $this->clip->toMap() : null;
        }
        if (null !== $this->superReso) {
            $res['SuperReso'] = null !== $this->superReso ? $this->superReso->toMap() : null;
        }
        if (null !== $this->subtitleConfig) {
            $res['SubtitleConfig'] = null !== $this->subtitleConfig ? $this->subtitleConfig->toMap() : null;
        }
        if (null !== $this->transConfig) {
            $res['TransConfig'] = null !== $this->transConfig ? $this->transConfig->toMap() : null;
        }
        if (null !== $this->muxConfig) {
            $res['MuxConfig'] = null !== $this->muxConfig ? $this->muxConfig->toMap() : null;
        }
        if (null !== $this->audio) {
            $res['Audio'] = null !== $this->audio ? $this->audio->toMap() : null;
        }
        if (null !== $this->video) {
            $res['Video'] = null !== $this->video ? $this->video->toMap() : null;
        }
        if (null !== $this->container) {
            $res['Container'] = null !== $this->container ? $this->container->toMap() : null;
        }
        if (null !== $this->encryption) {
            $res['Encryption'] = null !== $this->encryption ? $this->encryption->toMap() : null;
        }
        if (null !== $this->editing) {
            $res['Editing'] = null !== $this->editing ? $this->editing->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return editingConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['Rotate'])) {
            $model->rotate = $map['Rotate'];
        }
        if (isset($map['VideoStreamMap'])) {
            $model->videoStreamMap = $map['VideoStreamMap'];
        }
        if (isset($map['AudioStreamMap'])) {
            $model->audioStreamMap = $map['AudioStreamMap'];
        }
        if (isset($map['DeWatermark'])) {
            $model->deWatermark = $map['DeWatermark'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['WaterMarkConfigUrl'])) {
            $model->waterMarkConfigUrl = $map['WaterMarkConfigUrl'];
        }
        if (isset($map['MergeConfigUrl'])) {
            $model->mergeConfigUrl = $map['MergeConfigUrl'];
        }
        if (isset($map['WaterMarkList'])) {
            $model->waterMarkList = waterMarkList::fromMap($map['WaterMarkList']);
        }
        if (isset($map['MergeList'])) {
            $model->mergeList = mergeList::fromMap($map['MergeList']);
        }
        if (isset($map['DigiWaterMark'])) {
            $model->digiWaterMark = digiWaterMark::fromMap($map['DigiWaterMark']);
        }
        if (isset($map['OutputFile'])) {
            $model->outputFile = outputFile::fromMap($map['OutputFile']);
        }
        if (isset($map['M3U8NonStandardSupport'])) {
            $model->m3U8NonStandardSupport = m3U8NonStandardSupport::fromMap($map['M3U8NonStandardSupport']);
        }
        if (isset($map['Properties'])) {
            $model->properties = properties::fromMap($map['Properties']);
        }
        if (isset($map['Clip'])) {
            $model->clip = clip::fromMap($map['Clip']);
        }
        if (isset($map['SuperReso'])) {
            $model->superReso = superReso::fromMap($map['SuperReso']);
        }
        if (isset($map['SubtitleConfig'])) {
            $model->subtitleConfig = subtitleConfig::fromMap($map['SubtitleConfig']);
        }
        if (isset($map['TransConfig'])) {
            $model->transConfig = transConfig::fromMap($map['TransConfig']);
        }
        if (isset($map['MuxConfig'])) {
            $model->muxConfig = muxConfig::fromMap($map['MuxConfig']);
        }
        if (isset($map['Audio'])) {
            $model->audio = audio::fromMap($map['Audio']);
        }
        if (isset($map['Video'])) {
            $model->video = video::fromMap($map['Video']);
        }
        if (isset($map['Container'])) {
            $model->container = container::fromMap($map['Container']);
        }
        if (isset($map['Encryption'])) {
            $model->encryption = encryption::fromMap($map['Encryption']);
        }
        if (isset($map['Editing'])) {
            $model->editing = editing::fromMap($map['Editing']);
        }

        return $model;
    }
}