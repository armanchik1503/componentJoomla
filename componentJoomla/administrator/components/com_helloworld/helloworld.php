<?php

defined('_JEXEC') or exit();

$controller = JCOntrollerLegacy::getInstance('helloworld'); //NewsController
$input = JFactory::getApplication()->input;
$controller->execute($input->get('task', 'display'));

$controller->redirect();
