<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpCompareJobListResponseBody\fpCompareJobList;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpCompareJobListResponseBody\nonExistIds;
use AlibabaCloud\Tea\Model;

class QueryFpCompareJobListResponseBody extends Model
{
    /**
     * @var fpCompareJobList
     */
    public $fpCompareJobList;

    /**
     * @var nonExistIds
     */
    public $nonExistIds;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'fpCompareJobList' => 'FpCompareJobList',
        'nonExistIds'      => 'NonExistIds',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fpCompareJobList) {
            $res['FpCompareJobList'] = null !== $this->fpCompareJobList ? $this->fpCompareJobList->toMap() : null;
        }
        if (null !== $this->nonExistIds) {
            $res['NonExistIds'] = null !== $this->nonExistIds ? $this->nonExistIds->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryFpCompareJobListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FpCompareJobList'])) {
            $model->fpCompareJobList = fpCompareJobList::fromMap($map['FpCompareJobList']);
        }
        if (isset($map['NonExistIds'])) {
            $model->nonExistIds = nonExistIds::fromMap($map['NonExistIds']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
