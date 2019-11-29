<?php

use Illuminate\Database\Seeder;
use App\Models\Cliente;
use Faker\Factory as Faker;

class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Cliente::create([
            "nombre"=>'Vandro',
            "apellido"=>'Neves dos Santos',
            "direccion"=>'Temporal',
            "telefono"=>'77245816',
            "email"=>'vandro@mail.com',
            "fecha_nacimiento"=>'1987-03-08'
        ]);

        $faker = Faker::create('es_ES');

        for($i = 0; $i < 10; $i++) {
            Cliente::create([
                "nombre"=>$faker->firstName,
                "apellido"=>$faker->lastName,
                "direccion"=>$faker->address,
                "telefono"=>$faker->phoneNumber,
                "email"=>$faker->unique()->email,
                "fecha_nacimiento"=>$faker->dateTimeThisCentury->format('Y-m-d')
            ]);
        }
    }
}
