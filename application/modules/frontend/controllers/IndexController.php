<?php
class IndexController extends Zend_Controller_Action
{
    protected $_manager;

    public function init()
    {
        $this->_manager = new Content_Posts();
    }

    public function indexAction()
    {
        $this->_forward('home');
    }

    public function homeAction()
    {
        $this->view->headTitle('Bienvenido');
        $this->view->posts = $this->_manager->fetchAll('home');
    }
}
