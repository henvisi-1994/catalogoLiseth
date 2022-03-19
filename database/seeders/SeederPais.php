<?php

namespace Database\Seeders;

use App\Models\Pais;
use Illuminate\Database\Seeder;

class SeederPais extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $ecuador= new Pais();
      $ecuador->nombre_pais='Ecuador';
      $ecuador->estado_pais='A';
      $ecuador->save();
    }
}
