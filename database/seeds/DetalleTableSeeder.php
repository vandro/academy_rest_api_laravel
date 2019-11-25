<?php

use Illuminate\Database\Seeder;
use App\Models\Detalle;
use Faker\Factory as Faker;

class DetalleTableSeeder extends Seeder
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
            Detalle::create([
                'id_factura'=>$faker->numberBetween(1,10),
                'id_producto'=>$faker->numberBetween(1,20),
                'cantidad'=>$faker->numberBetween(1,8),
                'precio'=>$faker->numberBetween(10,100)
            ]);
        }
    }
}
