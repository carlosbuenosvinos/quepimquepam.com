<?php
/**
 * Sites_SiteDataMapper
 *
 * @author Carlos Buenosvinos
 * @version 1.0
 */
class Sites_SiteDataMapper
{
    /**
     * The default table name
     */
    public function getDefault()
    {
        $s = new Sites_Site();
        $s->id = 'phpchamp';
        $s->name = 'phpChampionship.com';
        return $s;
    }
}