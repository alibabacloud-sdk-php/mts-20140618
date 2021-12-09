<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\abuseResult;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\adResult;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\contrabandResult;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\liveResult;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\logoResult;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\politicsResult;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\pornResult;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\qrcodeResult;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\spamResult;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\terrorismResult;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var abuseResult
     */
    public $abuseResult;

    /**
     * @var adResult
     */
    public $adResult;

    /**
     * @var contrabandResult
     */
    public $contrabandResult;

    /**
     * @var liveResult
     */
    public $liveResult;

    /**
     * @var logoResult
     */
    public $logoResult;

    /**
     * @var politicsResult
     */
    public $politicsResult;

    /**
     * @var pornResult
     */
    public $pornResult;

    /**
     * @var qrcodeResult
     */
    public $qrcodeResult;

    /**
     * @var string
     */
    public $score;

    /**
     * @var spamResult
     */
    public $spamResult;

    /**
     * @var string
     */
    public $suggestion;

    /**
     * @var terrorismResult
     */
    public $terrorismResult;
    protected $_name = [
        'abuseResult'      => 'AbuseResult',
        'adResult'         => 'AdResult',
        'contrabandResult' => 'ContrabandResult',
        'liveResult'       => 'LiveResult',
        'logoResult'       => 'LogoResult',
        'politicsResult'   => 'PoliticsResult',
        'pornResult'       => 'PornResult',
        'qrcodeResult'     => 'QrcodeResult',
        'score'            => 'Score',
        'spamResult'       => 'SpamResult',
        'suggestion'       => 'Suggestion',
        'terrorismResult'  => 'TerrorismResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->abuseResult) {
            $res['AbuseResult'] = null !== $this->abuseResult ? $this->abuseResult->toMap() : null;
        }
        if (null !== $this->adResult) {
            $res['AdResult'] = null !== $this->adResult ? $this->adResult->toMap() : null;
        }
        if (null !== $this->contrabandResult) {
            $res['ContrabandResult'] = null !== $this->contrabandResult ? $this->contrabandResult->toMap() : null;
        }
        if (null !== $this->liveResult) {
            $res['LiveResult'] = null !== $this->liveResult ? $this->liveResult->toMap() : null;
        }
        if (null !== $this->logoResult) {
            $res['LogoResult'] = null !== $this->logoResult ? $this->logoResult->toMap() : null;
        }
        if (null !== $this->politicsResult) {
            $res['PoliticsResult'] = null !== $this->politicsResult ? $this->politicsResult->toMap() : null;
        }
        if (null !== $this->pornResult) {
            $res['PornResult'] = null !== $this->pornResult ? $this->pornResult->toMap() : null;
        }
        if (null !== $this->qrcodeResult) {
            $res['QrcodeResult'] = null !== $this->qrcodeResult ? $this->qrcodeResult->toMap() : null;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->spamResult) {
            $res['SpamResult'] = null !== $this->spamResult ? $this->spamResult->toMap() : null;
        }
        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
        }
        if (null !== $this->terrorismResult) {
            $res['TerrorismResult'] = null !== $this->terrorismResult ? $this->terrorismResult->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AbuseResult'])) {
            $model->abuseResult = abuseResult::fromMap($map['AbuseResult']);
        }
        if (isset($map['AdResult'])) {
            $model->adResult = adResult::fromMap($map['AdResult']);
        }
        if (isset($map['ContrabandResult'])) {
            $model->contrabandResult = contrabandResult::fromMap($map['ContrabandResult']);
        }
        if (isset($map['LiveResult'])) {
            $model->liveResult = liveResult::fromMap($map['LiveResult']);
        }
        if (isset($map['LogoResult'])) {
            $model->logoResult = logoResult::fromMap($map['LogoResult']);
        }
        if (isset($map['PoliticsResult'])) {
            $model->politicsResult = politicsResult::fromMap($map['PoliticsResult']);
        }
        if (isset($map['PornResult'])) {
            $model->pornResult = pornResult::fromMap($map['PornResult']);
        }
        if (isset($map['QrcodeResult'])) {
            $model->qrcodeResult = qrcodeResult::fromMap($map['QrcodeResult']);
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['SpamResult'])) {
            $model->spamResult = spamResult::fromMap($map['SpamResult']);
        }
        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }
        if (isset($map['TerrorismResult'])) {
            $model->terrorismResult = terrorismResult::fromMap($map['TerrorismResult']);
        }

        return $model;
    }
}
