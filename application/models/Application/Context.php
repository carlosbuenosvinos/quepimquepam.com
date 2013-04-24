<?php
class Application_Context
{
    /**
     * Returns Logger Object
     * 
     * @return Zend_Log
     */
    public static function getLogger()
    {
        return Zend_Registry::get('Zend_Log');
    }
}