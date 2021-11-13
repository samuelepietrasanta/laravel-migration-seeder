<?php

use Illuminate\Database\Seeder;
use App\Models\Trip;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trips =[
            [
                "destinazione" => "Roma",
                "data_di_partenza" => "2021/12/10",
                "prezzo" => "56.99",
            ],
            [
                "destinazione" => "Bali",
                "data_di_partenza" => "2022/01/27",
                "prezzo" => "1459.00",
            ],
            [
                "destinazione" => "Liverpool",
                "data_di_partenza" => "2022/10/01",
                "prezzo" => "100.00",
            ],
            [
                "destinazione" => "New York",
                "data_di_partenza" => "2022/02/14",
                "prezzo" => "999.99",
            ],
            [
                "destinazione" => "Tokyo",
                "data_di_partenza" => "2021/12/20",
                "prezzo" => "850.00",
            ]
        ];

        foreach ($trips as $trip){
            $newTrip = new Trip();

            $newTrip -> fill($trip);
            $newTrip->save();

        }
    }
}
