<?php
class ReyesController extends Zend_Controller_Action
{
    protected $_manager;

    public function init()
    {
        $this->_manager = new Content_Posts();
    }

    public function indexAction()
    {
        $this->_forward('reyes');
    }

    public function reyesAction()
    {
        $this->view->headTitle('Reyes 2012');
        $this->view->posts = $this->_manager->fetchAll('reyes');
    }
}
