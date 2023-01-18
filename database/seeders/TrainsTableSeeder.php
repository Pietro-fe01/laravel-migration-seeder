<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20; $i++) { 
            $newTrain = new Train();
            $newTrain->company = $faker->randomElement(['Trenitalia SPA', 'Italo-Nuovo Trasporto Viaggiatori', 'Trenord SPA', 'Interjet Srl']);
            $newTrain->starting_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->starting_time = $faker->dateTimeBetween('+0 days', '+2 years');
            $newTrain->arrival_time = $faker->dateTimeBetween($newTrain->starting_time, '+2 years');;
            $newTrain->unique_code = $faker->randomNumber(5, true);
            $newTrain->carriages_num = $faker->numberBetween(1, 15);;
            $newTrain->in_time = $faker->numberBetween(0, 1);
            $newTrain->is_cancelled = $faker->numberBetween(0, 1);
    
            // Salvare il record nel DB
            $newTrain->save();
        }
    }
}
