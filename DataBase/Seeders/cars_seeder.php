<?php

namespace Seeders;

require_once('Seeder.php');

class CarsSeeder extends Seeder
{
    public function run()
    {
        $carsjson = file_get_contents(__DIR__ .'/../../data_cars.json');
        $cars = json_decode($carsjson, true);
        $request= $this->generateRequest($cars);
        $request = $this->pdo->prepare($request);
        $request->execute();
    }
    protected function generateRequest($cars)
    {

        $request = "INSERT INTO Cars(ID, Name, City, Car) VALUES ";
        foreach ($cars as $car){
            $request = $request."(".$car['id'].
                ", '".$car['name']."'".
                ", '".$car['city']."'".
                ", '".$car['car'];
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