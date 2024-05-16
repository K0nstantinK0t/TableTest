<?php

namespace Migrations;

require_once('Migration.php');

class CarsMigration extends Migration
{
    public function run()
    {
        $request = $this->pdo->prepare("CREATE TABLE Cars(
            ID  INT PRIMARY KEY,
            Name varchar(255),
            City varchar(255),
            Car varchar(255)
);");
        $request->execute();
    }

    public function cancel()
    {
        $request = $this->pdo->prepare("DROP TABLE Cars");
        $request->execute();
    }
}