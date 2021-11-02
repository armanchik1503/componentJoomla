<?php

defined('_JEXEC') or exit();

class helloworldViewhelloworld extends JViewLegacy {

    protected $items;
    protected $pagination;

    public function display($tpl = null){
        $this->items = $this->get('Items');
        $this->pagination = $this->get('Pagination');
        $this->addToolBar();
        return parent::display($tpl); // TODO: Change the autogenerated stub
        $this->setDocument();
    }
    protected function addToolBar(){
        JToolbarHelper::title('Менеджер новостей');

        JToolbarHelper::addNew('item.add');
        JToolbarHelper::editList('item.edit');
        JToolbarHelper::deleteList('','helloworld.delete');
    }
    protected function setDocument(){
        $document = JFactory::getDocument();
        $document->setTitle('Панель управления компонента новостей');
    }
}