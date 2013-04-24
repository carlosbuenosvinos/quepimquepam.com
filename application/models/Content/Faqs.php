<?php
class Content_Faqs
{
    public function fetchAll() 
    {
        $xmlObj = simplexml_load_file(ROOT_PATH . '/resources/faqs.xml', 'Content_Faq');
        $rowSet = array();
        foreach ($xmlObj as $faq) {
            $rowSet[] = $faq;
        }
        return $rowSet;
    }
}