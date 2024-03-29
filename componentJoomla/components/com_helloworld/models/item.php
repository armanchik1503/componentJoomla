<?php

defined('_JEXEC') or exit();

class HelloworldModelItem extends JModelItem {
    protected $item;
    protected function populateState() {
        $input = JFactory::getApplication()->input;

        $id = $input->get('id', 1, 'INT');
        $this->setState('item.id', $id);

    }

    public function getItem(){
        $id = $this->getState('item.id');
        $db = JFactory::getDbo();
        $query = $db->getQuery(TRUE);

        $query->select('`id`, `title`, `text`, `images`, `published_up`, `alias`');
        $query->from('#__news');
        $query->where('id='.(int)$id);

        $db->setQuery($query);
        $this->item = $db->loadObject();

        if ($this->item){
            $this->item->images = json_decode($this->item->images);
        }

        return $this->item;


        return $query;
    }
}