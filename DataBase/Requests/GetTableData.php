<?php
namespace Requests;
use DBRequest;
require_once(__DIR__ .'/../DBRequest.php');
class GetTableData extends DBRequest
{
    public function run()
    {
        $request = 'SELECT * FROM Cars INNER JOIN Attempts ON Cars.`id` = Attempts.Car_ID;';
        return $this->pdo->query($request);
    }
}