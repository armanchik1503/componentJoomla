<?php

defined('_JEXEC') or exit();

class helloworldControllerhelloworld extends JControllerAdmin {
    public function getModel($name = 'Item', $prefix = 'helloworldModel', $config = array())
    {
        return parent::getModel($name, $prefix, $config);
    }
}
