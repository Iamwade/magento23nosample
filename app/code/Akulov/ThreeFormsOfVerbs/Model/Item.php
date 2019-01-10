<?php

namespace Akulov\ThreeFormsOfVerbs\Model;

use Magento\Framework\Model\AbstractModel;

class Item extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(\Akulov\ThreeFormsOfVerbs\Model\ResourceModel\Item::class);
    }
}
