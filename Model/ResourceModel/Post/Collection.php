<?php

namespace Magenest\Forum\Model\ResourceModel\Post;

use Magenest\Forum\Model\Post as PostModel;
use Magenest\Forum\Model\ResourceModel\Post as PostResourceModel;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init(PostModel::class, PostResourceModel::class);
    }

}
