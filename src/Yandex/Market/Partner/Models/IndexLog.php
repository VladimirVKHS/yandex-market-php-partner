<?php

namespace Yandex\Market\Partner\Models;

use Yandex\Common\Model;

class IndexLog extends Model
{
    protected $feed;
    protected $indexLogRecords;

    protected $mappingClasses = [
        'indexLogRecords' => IndexLogRecords::class,
    ];

    /**
     * @return int
     */
    public function getFeedId()
    {
        return $this->feed['id'];
    }

    /**
     * @return IndexLogRecords
     */
    public function getIndexLogRecords()
    {
        return $this->indexLogRecords;
    }
}
