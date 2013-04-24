<?php
class ContactoController extends Zend_Controller_Action 
{
    protected $_manager;
    
    public function init() 
    {
        $this->_manager = new Content_Posts();
    }
    
    public function indexAction()
    {
        $this->_forward('contacto');
    }
    
    public function contactoAction() 
    {
        $this->view->headTitle('Dónde nos encuentras');
        $this->view->posts = $this->_manager->fetchAll('contacto');
    }
}
