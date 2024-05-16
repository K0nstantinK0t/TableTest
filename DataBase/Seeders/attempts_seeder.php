<?php

namespace Seeders;

require_once('Seeder.php');

class AttemptsSeeder extends Seeder
{
    public function run()
    {
        $attemptsjson = file_get_contents(__DIR__ .'/../../data_attempts.json');
        $attempts = json_decode($attemptsjson, true);
        $request= $this->generateRequest($attempts);
        $request = $this->pdo->prepare($request);
        $request->execute();
    }
    protected function generateRequest($cars)
    {

        $request = "INSERT INTO Attempts(ID, Car_ID, Result) VALUES ";
        foreach ($cars as $key=>$car){
            $request = $request."(".$key.
                ", ".$car['id'].
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