<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\ListAllMediaBucketResponseBody\mediaBucketList;
use AlibabaCloud\Tea\Model;

class ListAllMediaBucketResponseBody extends Model
{
    /**
     * @description The media buckets returned.
     *
     * @var mediaBucketList
     */
    public $mediaBucketList;

    /**
     * @description The returned value of NextPageToken is a pagination token, which can be used in the next request to retrieve a new page of results.
     *
     * @example P2Zqo1PLGhZdygo-ajSsjUX5zrBHCgXy6j4hEvv****
     *
     * @var string
     */
    public $nextPageToken;

    /**
     * @description The ID of the request.
     *
     * @example 79760D91-D3CF-4165-****-B7E2836EF62A
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'mediaBucketList' => 'MediaBucketList',
        'nextPageToken'   => 'NextPageToken',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaBucketList) {
            $res['MediaBucketList'] = null !== $this->mediaBucketList ? $this->mediaBucketList->toMap() : null;
        }
        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAllMediaBucketResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaBucketList'])) {
            $model->mediaBucketList = mediaBucketList::fromMap($map['MediaBucketList']);
        }
        if (isset($map['NextPageToken'])) {
            $model->nextPageToken = $map['NextPageToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
