<?php

namespace Akulov\ThreeFormsOfVerbs\Controller\Page;

use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\Controller\ResultFactory;


class View extends \Magento\Framework\App\Action\Action
{

//    protected $resultJsonFactory;
//
//    public function __construct(
//        Context $context,
//        JsonFactory $resultJsonFactory
//    )
//    {
//        $this->resultJsonFactory = $resultJsonFactory;
//        parent::__construct($context);
//    }

    public function execute()
    {
        $post = (array)$this->getRequest()->getPost();
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
//        $result = $this->resultJsonFactory->create();
//        return $result->setData($post);
    }
}
