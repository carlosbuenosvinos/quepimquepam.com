<?php
class Cbz_Controller_Plugin_Frontend_LayoutLoader extends Zend_Controller_Plugin_Abstract
{
    public function dispatchLoopStartup(Zend_Controller_Request_Abstract $request) {
        $viewRenderer = Zend_Controller_Action_HelperBroker::getExistingHelper('viewRenderer');
        if (is_null($viewRenderer->view)) {
            $viewRenderer->init();
        }
        $view = $viewRenderer->view;
        $view->doctype('XHTML1_TRANSITIONAL');

        $view->headTitle('QuePimQuePam.com');
        $view->headTitle()->setSeparator(' - ');
        $view->setScriptPath(ROOT_PATH . '/application/modules/frontend/views/tpl');
        $view->addHelperPath(ROOT_PATH . '/application/modules/frontend/views/helpers', 'Qpqp_View_Helper_');

        $view->headLink()->headLink(array('rel' => 'shortcut icon', 'type' => 'image/ico', 'href' => '/img/favicon.ico'));

        $view->headMeta()->appendHttpEquiv('Content-Type', 'text/html;charset=utf-8');
        $view->headMeta()->appendHttpEquiv('keywords', 'auditoria barcelona, consultoria barcelona, autonomos barcelona, creacion empresa barcelona');
        $view->headMeta()->appendHttpEquiv('description', '');

        $request = $this->getRequest();
        $view->module = $request->getParam('module');
        $view->controller = $request->getParam('controller');
        $view->action = $request->getParam('action');

        $view->headLink()->appendStylesheet('/css/vector-lover.css');

        /**
         * Sets the Layout configuration
         */
        Zend_Layout::startMvc(array('layoutPath' => ROOT_PATH . '/application/modules/frontend/views/layouts', 'layout' => 'default'));
    }
}