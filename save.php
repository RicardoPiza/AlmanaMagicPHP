<?php 
require_once 'cards.php';
require_once 'api_search.php';
$cards = new Cards();
$cards->setName($_GET[$name]);