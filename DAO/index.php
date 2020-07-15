<?php

require_once("config.php");

$root = new Users();

$root->loadById(1);

echo $root;
?>