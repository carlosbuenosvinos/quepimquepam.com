<?php
class EquipoController extends Zend_Controller_Action 
{
    protected $_manager;
    
    public function init() 
    {
        $this->_manager = new Content_Posts();
    }

    public function indexAction()
    {
        $this->_forward('equipo');
    }
    
    public function equipoAction() 
    {
        $this->view->headTitle('Tú tambien puedes formar parte de nuestra familia');
        $this->view->posts = $this->_manager->fetchAll('equipo');
    }
}
