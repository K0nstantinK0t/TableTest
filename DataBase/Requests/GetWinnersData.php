<?php
namespace Requests;
use DBRequest;
require_once(__DIR__ .'/../DBRequest.php');
class GetWinnersData extends DBRequest
{
    public function run()
    {
        $request = '
            SELECT Cars.Name, SUM(Attempts.Result) AS TotalResult
            FROM Cars
            INNER JOIN Attempts ON Cars.ID = Attempts.Car_ID
            GROUP BY Cars.ID
            ORDER BY TotalResult DESC
;';
        return $this->pdo->query($request);
    }
}