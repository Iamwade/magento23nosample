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

    public function getFormAction()
    {
        // companymodule is given in routes.xml
        // controller_name is folder name inside controller folder
        // action is php file name inside above controller_name folder
        return '/result/page/view';
        // here controller_name is index, action is booking
    }

    public function getPostData(){
        $post = (array)$this->getRequest()->getPost();
    }
}
