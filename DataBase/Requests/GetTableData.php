<?php
namespace Requests;
use DBRequest;
require_once(__DIR__ .'/../DBRequest.php');
class GetTableData extends DBRequest
{
    public function run()
    {
        $request = 'SELECT * FROM Cars INNER JOIN Attempts ON Cars.ID = Attempts.Car_ID ORDER BY Attempts.ID;';
        return $this->pdo->query($request);
    }
}