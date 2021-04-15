<?php
include_once './config/db_config.php';
include_once './objects/team.php';

$database = new my_DB();
$db = $database->getConnect();

$team = new ourTeam($db);

$array_team = $team->readAll();
