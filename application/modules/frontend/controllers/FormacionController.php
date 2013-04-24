<?php
class FormacionController extends Zend_Controller_Action 
{
    protected $_manager;

    public function init() 
    {
        $this->_manager = new Content_Posts();
    }

    public function indexAction()
    {
        $this->_forward('formacion');
    }

    public function formacionAction() 
    {
        // $this->view->headTitle('');
        $this->view->posts = $this->_manager->fetchAll('formacion');
    }
}
