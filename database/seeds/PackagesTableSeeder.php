<?php

use Faker\Generator as Faker;
use App\Package;
use Illuminate\Database\Seeder;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

       for ($i=0; $i < 100; $i++) { 
           
           $new_package = new Package();
           $new_package->hotel_incluso = $faker->boolean();
           $new_package->giorni = $faker->numberBetween(1, 30);
           $new_package->citta_di_partenza = $faker->city();
           $new_package->citta_di_destinazione = $faker->city();
           $new_package->prezzo = $faker->numberBetween(20, 9999);
           $new_package->data_di_partenza = $faker->date($format = 'Y-m-d', $max = 'now');
           $new_package->pacchetto = $faker->text(20);
           $new_package->save();

       }

    }
}
