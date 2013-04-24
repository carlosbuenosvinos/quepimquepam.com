<?php
class Application_Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    protected function _initAutoLoader()
    {
        /**
         * We set up Zend_Loader as the default autoload handler
         * @todo Use Zend_Loader_Autoloader in the right way
         */
        require_once 'Zend/Loader/Autoloader.php';
        $autoloader = Zend_Loader_Autoloader::getInstance();
        $autoloader->setFallbackAutoloader(true);
    }

    protected function _initConfigurations()
    {
        /**
         * Load Configuration from INI Config File
         * The Zend_Config_Ini component will parse the ini file, and resolve all of
         * the values for the given section.  Here we will be using the section name
         * that corresponds to the APP's Environment
         */
        Zend_Registry::set('configurationSection', APPLICATION_ENV);
        Zend_Registry::set('IS_PRODUCTION', APPLICATION_ENV == 'production');
        Zend_Registry::set('IS_STAGING', APPLICATION_ENV == 'staging');
        Zend_Registry::set('IS_DEVELOPMENT', APPLICATION_ENV == 'development');

        $configuration = new Zend_Config_Ini(APPLICATION_PATH . '/configs/application.ini', APPLICATION_ENV);
        Zend_Registry::set('configuration', $configuration);
        Zend_Registry::set('ROOT_PATH', ROOT_PATH);
        Zend_Registry::set('APPLICATION_PATH', APPLICATION_PATH);
        Zend_Registry::set('APPLICATION_ENVIRONMENT', APPLICATION_ENV);
        Zend_Registry::set('BASE_URL', $_SERVER['SERVER_NAME']);
    }

    protected function _initPlugIns()
    {
        //Don't forget to bootstrap the front controller as the resource may not been created yet...
        $this->bootstrap("frontController");
        $front = $this->getResource("frontController");
        $front->registerPlugin(new Cbz_Controller_Plugin_Frontend_LayoutLoader());
        $front->registerPlugin(new Zend_Controller_Plugin_ErrorHandler());
    }

    protected function _initSiteRoutes()
    {
        //Don't forget to bootstrap the front controller as the resource may not been created yet...
        $this->bootstrap("frontController");
        $front = $this->getResource("frontController");
        // $front->throwExceptions(true);

        // Sets the base Url for some View Helpers
        $front->setBaseUrl('http://' . $_SERVER['SERVER_NAME']);

        $front->addModuleDirectory(APPLICATION_PATH . '/modules');
        $front->setDefaultModule('frontend');
    }
}
