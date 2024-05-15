<?php

namespace Seeders;

require_once('Seeder.php');

class AttemptsSeeder extends Seeder
{
    public function run()
    {
        $attemptsjson = file_get_contents('../../data_attempts.json');
        $attempts = json_decode($attemptsjson, true);
        $request= $this->generateRequest($attempts);
        $request = $this->pdo->prepare($request);
        $request->execute();
    }
    protected function generateRequest($cars)
    {

        $request = "INSERT INTO Attempts(Car_ID, Result) VALUES ";
        foreach ($cars as $car){
            $request = $request."(".$car['id'].
                ", '".$car['result'];
            if($car == end($cars))
            {
                $request = $request."');";
            }
            else
            {
                $request = $request."'),";
            }
        }
        return $request;
    }
}