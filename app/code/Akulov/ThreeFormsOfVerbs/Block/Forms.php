<?php

namespace Akulov\ThreeFormsOfVerbs\Block;

use Magento\Framework\View\Element\Template;
use Akulov\ThreeFormsOfVerbs\Model\ResourceModel\Item\CollectionFactory;

class Forms extends Template
{
    private $collectionFactory;

    public function __construct(
        Template\Context $context,
        CollectionFactory $collectionFactory,
        array $data = []
    ) {
        $this->collectionFactory = $collectionFactory;
        parent::__construct($context, $data);
    }

    /**
     * @return \Akulov\ThreeFormsOfVerbs\Model\Item[]
     */
    public function getItems()
    {
        return $this->collectionFactory->create()->getItems();
    }

    public function getRandomItems()
    {
        $items = $this->getItems();
        $itemsRand = array_rand($items, 10);
        return $itemsRand;
    }
}
