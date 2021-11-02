<?php

defined('_JEXEC') or exit();

class helloworldTableItem extends JTable {
    public function __construct($db)
    {
        parent::__construct('#__news', 'id', $db);
    }
}