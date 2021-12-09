<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryCoverJobListResponseBody\coverJobList;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryCoverJobListResponseBody\nonExistIds;
use AlibabaCloud\Tea\Model;

class QueryCoverJobListResponseBody extends Model
{
    /**
     * @var coverJobList
     */
    public $coverJobList;

    /**
     * @var string
     */
    public $nextPageToken;

    /**
     * @var nonExistIds
     */
    public $nonExistIds;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'coverJobList'  => 'CoverJobList',
        'nextPageToken' => 'NextPageToken',
        'nonExistIds'   => 'NonExistIds',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->coverJobList) {
            $res['CoverJobList'] = null !== $this->coverJobList ? $this->coverJobList->toMap() : null;
        }
        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
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
     * @return QueryCoverJobListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CoverJobList'])) {
            $model->coverJobList = coverJobList::fromMap($map['CoverJobList']);
        }
        if (isset($map['NextPageToken'])) {
            $model->nextPageToken = $map['NextPageToken'];
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
