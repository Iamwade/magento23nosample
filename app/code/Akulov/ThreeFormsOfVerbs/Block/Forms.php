<?php

namespace Akulov\ThreeFormsOfVerbs\Block;

use Magento\Framework\View\Element\Template;
use Akulov\ThreeFormsOfVerbs\Model\ResourceModel\Item\CollectionFactory;
use Magento\Framework\Message\ManagerInterface;

class Forms extends Template
{
    private $collectionFactory;

    public function __construct(
        Template\Context $context,
        CollectionFactory $collectionFactory,
        ManagerInterface $messageManager,
        array $data = []
    ) {
        $this->messageManager = $messageManager;
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

    public function getAssessment($correctly){
        $percent = (100 * $correctly / 30);
        return $this->messageManager->addSuccessMessage("Вы ответили правильно на $percent %");
    }

}


