<?php
class Content_Post extends SimpleXMLElement
{
    public function getTags()
    {
        $tags = array();
        foreach($this->tags->tag as $tag) {
            // $tags[] = '<a href="" title="">' . strval($tag) . '</a>';
            $tags[] = strval($tag);
        }
        return $tags;
    }
}