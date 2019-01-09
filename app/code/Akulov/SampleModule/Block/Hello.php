<?php

namespace Akulov\SampleModule\Block;

use Magento\Framework\View\Element\Template;
use Akulov\SampleModule\Model\ResourceModel\Item\Collection;
use Akulov\SampleModule\Model\ResourceModel\Item\CollectionFactory;

class Hello extends Template
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
     * @return \Akulov\SampleModule\Model\Item[]
     */
    public function getItems()
    {
        return $this->collectionFactory->create()->getItems();
    }
}
