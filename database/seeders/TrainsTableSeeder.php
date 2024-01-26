<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 1000; $i++){
            $newTrain = new Train();
            $newTrain->azienda = $faker->name();
            $newTrain->stazione_di_partenza =$faker->name();
            $newTrain->stazione_di_arrivo = $faker->name();
            $newTrain->orario_di_partenza = $faker->time();
            $newTrain->orario_di_arrivo = $faker->time();
            $newTrain->codice_treno = $faker->isbn10();
            $newTrain->numero_carrozze = $faker->randomDigitNotNull();
            $newTrain->in_orario = $faker->boolean();
            $newTrain->cancellato = $faker->boolean();
            $newTrain->giorno_di_partenza = $faker->dateTime();
            $newTrain->save();
        }
    }
}
