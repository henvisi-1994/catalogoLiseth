<?php

namespace Database\Seeders;

use App\Models\Cargo;
use Illuminate\Database\Seeder;

class SeederCargo extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $administrador = new Cargo();
       $administrador->id_emp=1;
       $administrador->nomb_cargo='Administrador';
       $administrador->observ_cargo='NN';
       $administrador->estado_cargo='A';
       $administrador->fecha_inicio='2022-03-18';
       $administrador->fecha_fin='2025-03-18';
       $administrador->save();
    }
}
