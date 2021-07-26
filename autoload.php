<?php
spl_autoload_register();
$home = new classes\home();
$home->get();

$home = new models\modelhome();
$home->get();