<?php
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

use App\Viaggio;

class ViaggiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0;$i < 10;$i++){
            $newViaggio = new Viaggio();
            $newViaggio->nome_viaggio = $faker->name;
            $newViaggio->data_partenza = $faker->date($format = 'Y-m-d', $max = 'now');
            $newViaggio->data_ritorno = $faker->date($format = 'Y-m-d', $max = 'now');
            $newViaggio->prezzo_viaggio = $faker->randomDigit;
            $newViaggio->save();
        }
    }
}
