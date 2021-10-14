<?php

namespace Magenest\Forum\Model\ResourceModel\Comment;

use Magenest\Forum\Model\Comment as CommentModel;
use Magenest\Forum\Model\ResourceModel\Comment as CommentResourceModel;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init(CommentModel::class, CommentResourceModel::class);
    }

}
