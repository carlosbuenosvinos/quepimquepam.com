<?php
class ErrorController extends Zend_Controller_Action 
{
    protected $_manager;
    
    public function init() 
    {
        $this->_manager = new Content_Posts();
    }
    
    public function errorAction()
    {
        $this->_redirect('/');
    }
}
