<?php

use Illuminate\Database\Seeder;
use App\Models\Producto;
use Faker\Factory as Faker;

class ProductoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('es_ES');

        for($i = 0; $i < 20; $i++) {
            Producto::create([
                'id_categoria'=>$faker->numberBetween(1,10),
                "nombre"=>$faker->realText($faker->numberBetween(10,20)),
                'precio'=>$faker->numberBetween(20,200),
                'stock'=>$faker->numberBetween(0,50)
            ]);
        }
    }
}
