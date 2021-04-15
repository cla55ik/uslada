<?php


include_once './config/db_config.php';
include_once './objects/product.php';

$database = new my_DB();
$db = $database->getConnect();

$my_prod = new product($db);
$array_product = $my_prod->readAll();
$array_similar = $my_prod->readSimilar();
