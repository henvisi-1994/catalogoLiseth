<?php

namespace Database\Seeders;

use App\Models\Ciudad;
use Illuminate\Database\Seeder;

class SeederCiudad extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $machala= new Ciudad();
        $machala->nombre_ciudad='Machala';
        $machala->id_provincia=1;
        $machala->estado_ciudad='A';
        $machala->save();
    }
}
