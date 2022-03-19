<?php

namespace Database\Seeders;

use App\Models\Provincia;
use Illuminate\Database\Seeder;

class SeederProvincia extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $elOro= new Provincia();
       $elOro->nombre_provincia='El Oro';
       $elOro->id_pais=1;
       $elOro->estado_prod='1';
       $elOro->save();
    }
}
