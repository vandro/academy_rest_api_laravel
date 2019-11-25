<?php

use Illuminate\Database\Seeder;
use App\Models\ModoPago;
use Faker\Factory as Faker;

class ModoPagoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('es_ES');

        for($i = 0; $i < 10; $i++) {
            ModoPago::create([
                "nombre"=>$faker->realText($faker->numberBetween(10,50),$faker->numberBetween(1,5)),
                "descripcion"=>$faker->realText(99)
            ]);
        }
    }
}
