<?php

namespace Database\Seeders;

use App\Models\TipoIdentificacion;
use Illuminate\Database\Seeder;

class SeederTipoIdentificacion extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $cedula= new TipoIdentificacion();
       $cedula->nombre_tipo='Cedula';
       $cedula->estado_tipo_ident='A';
       $cedula->save();

       $ruc= new TipoIdentificacion();
       $ruc->nombre_tipo='RUC';
       $ruc->estado_tipo_ident='A';
       $ruc->save();
    }
}
