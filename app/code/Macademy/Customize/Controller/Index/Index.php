<?php
namespace Macademy\Customize\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
    /**
     * Index action
     *
     * @return $this
     */
    public function execute()
    {
        $this->_view->loadLayout();
        $this->_view->getLayout()->getBlock('page.main.title')->setPageTitle('DemoWidget');
        $this->_view->renderLayout();
    }
}