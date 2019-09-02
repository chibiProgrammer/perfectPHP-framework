<?php

require 'core/ClassLoader.php';

$loader = new ClassLoader();
$loader->registerDir(dirname(__FILE__).'/Core');
$loader->registerDir(dirname(__FILE__).'/Models');
$loader->register();
