<?php

namespace Akulov\ThreeFormsOfVerbs\Model\ResourceModel\Item;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Akulov\ThreeFormsOfVerbs\Model\Item;
use Akulov\ThreeFormsOfVerbs\Model\ResourceModel\Item as ItemResource;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'id';

    protected function _construct()
    {
        $this->_init(Item::class, ItemResource::class);
    }
}
