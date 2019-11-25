<?php

use Illuminate\Database\Seeder;
use App\Models\Factura;
use Faker\Factory as Faker;

class FacturaTableSeeder extends Seeder
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
            // $fecha = $faker->dateTimeBetween('-120 days', 'now')->format('Y-m-d');
            Factura::create([
                'id_cliente'=>$faker->numberBetween(1,11),
                'id_modo_pago'=>$faker->numberBetween(1,10),
                'fecha'=>$faker->dateTimeBetween('-120 days', 'now')->format('Y-m-d')//$fecha->format('Y-m-d')//dateTimeBetween($startDate = '-2 years', $endDate = 'now', $timezone = null)//$faker->dateTimeThisCentury->format('Y-m-d')
            ]);
        }
    }
}
