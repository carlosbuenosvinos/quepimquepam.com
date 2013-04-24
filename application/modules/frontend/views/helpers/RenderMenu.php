<?php
class Qpqp_View_Helper_RenderMenu extends Zend_View_Helper_Abstract
{
    public function renderMenu ()
    {
        $fc = Zend_Controller_Front::getInstance()->getRequest();
        $actionName = trim(strval($fc->getParam('action')));
        $controllerName = trim(strval($fc->getParam('controller')));

        $listOptions = array(
            'home' => array('Inicio', '/', false),
            'pymes' => array('Servicios para PYMEs', '/pymes', false),
            'scrum' => array('Scrum', '/scrum', false),
            // 'formacion' => array('Formación', '/formacion', false),
            'equipo' => array('Trincheras', '/equipo', false)
        );

        if (array_key_exists($controllerName, $listOptions)) {
            $listOptions[$controllerName][2] = true;
        } elseif($actionName == 'index' && $controllerName == 'index') {
            $listOptions['home'][2] = true;
        }

        $this->view->options = $listOptions;
        return $this->view->render('widgets/menu.phtml');
    }
}