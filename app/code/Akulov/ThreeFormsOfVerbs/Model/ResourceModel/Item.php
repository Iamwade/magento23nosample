<?php

namespace Akulov\ThreeFormsOfVerbs\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Item extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('three_forms_of_verbs', 'id');
    }
}
