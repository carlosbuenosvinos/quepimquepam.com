<?php
class PymesController extends Zend_Controller_Action 
{
    protected $_manager;
    
    public function init() 
    {
        $this->_manager = new Content_Posts();
    }
    
    public function indexAction()
    {
        $this->_forward('pymes');
    }
    
    public function pymesAction() 
    {
        $this->view->headTitle('Haz más con menos');
        $this->view->posts = $this->_manager->fetchAll('pymes');
    }
}
