<?php

use Illuminate\Database\Seeder;
use App\Models\Categoria;
use Faker\Factory as Faker;

class CategoriaTableSeeder extends Seeder
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
            Categoria::create([
                "nombre"=>$faker->realText($faker->numberBetween(10,50),$faker->numberBetween(1,5)),
                "descripcion"=>$faker->text(400)
            ]);
        }
    }
}
