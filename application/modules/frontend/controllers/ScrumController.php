<?php
class ScrumController extends Zend_Controller_Action
{
    protected $_manager;

    public function init()
    {
        $this->_manager = new Content_Posts();
    }

    public function indexAction()
    {
        $this->_forward('scrum');
    }

    public function scrumAction()
    {
        $this->view->headTitle('Consultoría Ágil');
        $this->view->posts = $this->_manager->fetchAll('scrum');
    }
}
