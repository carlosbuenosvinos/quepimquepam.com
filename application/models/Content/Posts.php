<?php
class Content_Posts
{
    public function fetchAll($pSection) 
    {
        $rowSet = array();
        $xmlObj = @simplexml_load_file(ROOT_PATH . '/resources/' . $pSection . '.xml', 'Content_Post');

        if ($xmlObj) {
            foreach ($xmlObj as $post) {
                $rowSet[] = $post;
            }
        }

        return $rowSet;
    }
}