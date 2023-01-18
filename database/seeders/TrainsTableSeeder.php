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
        // public function new_record(){
        //     $new_train = new Train();
        //     $new_train->company = 'Italo-Nuovo Trasporto Viaggiatori';
        //     $new_train->starting_station = 'Milano Centrale';
        //     $new_train->arrival_station = 'Firenze Centrale';
        //     $new_train->starting_time = '2023-01-17 12:37:00';
        //     $new_train->arrival_time = '2023-01-17 14:58:00';
        //     $new_train->unique_code = '17824';
        //     $new_train->carriages_num = 3;
        //     $new_train->in_time = 1;
        //     $new_train->is_cancelled = 0;
        //     $new_train->save();

        //     return view('new-record');
        // }
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
