<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\AddMCTemplateResponseBody;

use AlibabaCloud\Tea\Model;

class template extends Model
{
    /**
     * @var string
     */
    public $abuse;

    /**
     * @var string
     */
    public $ad;

    /**
     * @var string
     */
    public $contraband;

    /**
     * @var string
     */
    public $live;

    /**
     * @var string
     */
    public $logo;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $politics;

    /**
     * @var string
     */
    public $porn;

    /**
     * @var string
     */
    public $qrcode;

    /**
     * @var string
     */
    public $spam;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $terrorism;
    protected $_name = [
        'abuse'      => 'Abuse',
        'ad'         => 'Ad',
        'contraband' => 'Contraband',
        'live'       => 'Live',
        'logo'       => 'Logo',
        'name'       => 'Name',
        'politics'   => 'Politics',
        'porn'       => 'Porn',
        'qrcode'     => 'Qrcode',
        'spam'       => 'Spam',
        'templateId' => 'TemplateId',
        'terrorism'  => 'Terrorism',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->abuse) {
            $res['Abuse'] = $this->abuse;
        }
        if (null !== $this->ad) {
            $res['Ad'] = $this->ad;
        }
        if (null !== $this->contraband) {
            $res['Contraband'] = $this->contraband;
        }
        if (null !== $this->live) {
            $res['Live'] = $this->live;
        }
        if (null !== $this->logo) {
            $res['Logo'] = $this->logo;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->politics) {
            $res['Politics'] = $this->politics;
        }
        if (null !== $this->porn) {
            $res['Porn'] = $this->porn;
        }
        if (null !== $this->qrcode) {
            $res['Qrcode'] = $this->qrcode;
        }
        if (null !== $this->spam) {
            $res['Spam'] = $this->spam;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->terrorism) {
            $res['Terrorism'] = $this->terrorism;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return template
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Abuse'])) {
            $model->abuse = $map['Abuse'];
        }
        if (isset($map['Ad'])) {
            $model->ad = $map['Ad'];
        }
        if (isset($map['Contraband'])) {
            $model->contraband = $map['Contraband'];
        }
        if (isset($map['Live'])) {
            $model->live = $map['Live'];
        }
        if (isset($map['Logo'])) {
            $model->logo = $map['Logo'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Politics'])) {
            $model->politics = $map['Politics'];
        }
        if (isset($map['Porn'])) {
            $model->porn = $map['Porn'];
        }
        if (isset($map['Qrcode'])) {
            $model->qrcode = $map['Qrcode'];
        }
        if (isset($map['Spam'])) {
            $model->spam = $map['Spam'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['Terrorism'])) {
            $model->terrorism = $map['Terrorism'];
        }

        return $model;
    }
}
