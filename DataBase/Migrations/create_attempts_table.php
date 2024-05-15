<?php

namespace Migrations;

require_once('Migration.php');

class AttemptsMigration extends Migration
{
    public function run()
    {
        $request = $this->pdo->prepare("CREATE TABLE Attempts(
            Car_ID  INT PRIMARY KEY,
            Result INT
);");
        $request->execute();
    }

    public function cancel()
    {
        $request = $this->pdo->prepare("DROP TABLE Attempts;");
        $request->execute();
    }
}