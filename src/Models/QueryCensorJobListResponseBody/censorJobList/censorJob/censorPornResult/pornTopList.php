<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryCensorJobListResponseBody\censorJobList\censorJob\censorPornResult;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryCensorJobListResponseBody\censorJobList\censorJob\censorPornResult\pornTopList\top;
use AlibabaCloud\Tea\Model;

class pornTopList extends Model
{
    /**
     * @var top[]
     */
    public $top;
    protected $_name = [
        'top' => 'Top',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->top) {
            $res['Top'] = [];
            if (null !== $this->top && \is_array($this->top)) {
                $n = 0;
                foreach ($this->top as $item) {
                    $res['Top'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pornTopList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Top'])) {
            if (!empty($map['Top'])) {
                $model->top = [];
                $n          = 0;
                foreach ($map['Top'] as $item) {
                    $model->top[$n++] = null !== $item ? top::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
