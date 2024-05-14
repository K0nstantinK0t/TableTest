<?php
require_once ('create_cars_table.php');
$carsMigration =  new CarsMigration();
$carsMigration->run();
