<?php

namespace Seeders;

require_once ('cars_seeder.php');
require_once ('attempts_seeder.php');
$carsseeder = new CarsSeeder();
$carsseeder->run();
$attemptsseeder = new AttemptsSeeder();
$attemptsseeder->run();