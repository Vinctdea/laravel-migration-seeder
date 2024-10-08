<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Travel;
use Illuminate\Support\Str;


class TravelTableSeederFaker extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 50; $i++) {

            $new_travel = new Travel();
            $new_travel->destinazione = $faker->word(99);
            $new_travel->luogo_partenza = $faker->word(255);
            $new_travel->luogo_arrivo = $faker->word(255);
            $new_travel->prezzo = $faker->numberBetween(500, 100000);
            $new_travel->itinerario = $faker->word(255);
            $new_travel->img_url = $faker->word(255);
            $new_travel->save();
        }
    }
}
