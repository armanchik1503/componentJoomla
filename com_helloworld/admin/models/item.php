<?php

defined('_JEXEC') or exit();

use Joomla\Registry\Registry;

class helloworldModelItem extends JModelAdmin {
    public function getForm($data = array(), $loadData = true){
        $form = $this->loadForm(
            'com_helloworld.item',
            'item',
            array(
                'control'=>'jform',
                'load_data'=>$loadData
            )
        );
        if (empty($form)){
            return FALSE;
        }

        return $form;
    }
    public function getTable($type = 'Item', $prefix = 'helloworldTable', $config = array())
    {
        return JTable::getInstance($type, $prefix, $config);
    }
    protected function prepareTable($table)
    {
        if (isset($table->images) && is_array($table->images)){
            $registry = new Registry();
            $registry->loadArray($table->images);
            $table->images = (string)$registry;
        }
    }
    protected function loadFormData()
    {
        $data = $this->getItem();
        return $data;
    }

    public function getItem($pk = null)
    {
        if ($item = parent::getItem($pk)){
            $registry = new Registry();
            $registry->loadString($item->images);
            $item->images = $registry->toArray();
            return $item;
        }
        return FALSE;
    }
}