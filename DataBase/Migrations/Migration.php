<?php

namespace Migrations;
use PDO;

require_once (__DIR__ .'/../DBRequest.php');

abstract class Migration extends \DBRequest
{

    public abstract function run();

    public abstract function cancel();
}