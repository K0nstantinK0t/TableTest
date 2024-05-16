<?php
namespace Requests;
use DBRequest;
require_once('../DBRequest.php');
class GetTableData extends DBRequest
{
    public function run()
    {
        $request = $this->pdo->prepare('
            SELECT * FROM Cars INNER JOIN Attempts ON Cars.`id` = Attempts.Car_ID;
        ');
        $request->execute();
    }
}