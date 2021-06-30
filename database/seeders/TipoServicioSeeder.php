<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\TipoServicio;


class TipoServicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoServicio::create(array('descripcion' => 'Taxi'));
        TipoServicio::create(array('descripcion' => 'Remis'));
        TipoServicio::create(array('descripcion' => 'Uber'));

    }
}