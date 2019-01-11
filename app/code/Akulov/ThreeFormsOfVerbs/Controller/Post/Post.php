<?php

namespace Akulov\ThreeFormsOfVerbs\Controller\Post;

use Magento\Framework\Controller\ResultFactory;

class Post extends \Magento\Framework\App\Action\Action
{
    /**
     * Post action
     *
     * @return void
     */
    public function execute()
    {
        // 1. POST request : Get booking data
        $post = (array) $this->getRequest()->getPost();

        if (!empty($post)) {
            // Retrieve your form data
//            $first   = $post['first'];
//            $second    = $post['second'];
//            $third       = $post['third'];

            $firstname   = $post['firstname'];
            $lastname    = $post['lastname'];
            $phone       = $post['phone'];
            $bookingTime = $post['bookingTime'];


            // Doing-something with...

            // Display the succes form validation message
            $this->messageManager->addSuccessMessage(var_dump($post));

            // Redirect to your form page (or anywhere you want...)
            $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
            $resultRedirect->setUrl('/threeforms');

            return $resultRedirect;
        }
        // 2. GET request : Render the booking page
        $this->_view->loadLayout();
        $this->_view->renderLayout();
    }
}
