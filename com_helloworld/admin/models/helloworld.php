<?php

defined('_JEXEC') or exit();

class helloworldModelhelloworld extends JModelList {

    protected function getListQuery()
    {

        $db = JFactory::getDbo();
        $query = $db->getQuery(TRUE);
        $query->select('`id`, `title`, `alias`, `published`');

        $query->from('#__news');

        return $query;
    }
}