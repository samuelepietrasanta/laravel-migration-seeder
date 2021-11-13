<?php

use Illuminate\Database\Seeder;
use App\Models\Trip;
use Faker\Generator as Faker;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0 ; $i < 20 ; $i++){
            $newTrip = new Trip();
            $newTrip->destinazione = $faker->country();
            $newTrip->data_di_partenza = $faker->date();
            $newTrip->prezzo = $faker->randomFloat(2,10.00,1000.00);


            $newTrip->save();

        }
    }
}