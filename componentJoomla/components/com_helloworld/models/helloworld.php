<?php

defined('_JEXEC') or exit();

class helloworldModelhelloworld extends JModelList {

    protected function getListQuery()
    {

        $db = JFactory::getDbo();
        $query = $db->getQuery(TRUE);
        $query->select('`id`, `title`, `text`, `images`, `published_up`, `alias`');

        $query->from('#__news');
        $query->where('`published` = 1');


        return $query;
    }
}