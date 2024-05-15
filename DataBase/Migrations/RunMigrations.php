<?php

use Migrations\AttemptsMigration;
use Migrations\CarsMigration;

require_once ('create_cars_table.php');
require_once ('create_attempts_table.php');

$carsMigration =  new CarsMigration();
$carsMigration->run();
$attemptsMigration = new AttemptsMigration();
$attemptsMigration->run();