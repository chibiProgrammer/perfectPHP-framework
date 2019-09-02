<?php

require_once './Dispatcher.php';

$dispatcher = new Dispatcher();
$dispatcher->setSystemRoot('/home/www/public_html/tuuhan');
$dispatcher->dispatch();

?>