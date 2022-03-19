<?php

namespace Database\Seeders;

use App\Models\Empresa;
use Illuminate\Database\Seeder;

class SeederEmpresa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $empresa = new Empresa();
        $empresa->razon_social='Novedades Liseth';
        $empresa->codigo_envio='EMP001';
        $empresa->nombre_comercial='Novedades Liset';
        $empresa->ruc='0000000000';
        $empresa->fecha_inicio='2022-03-18';
        $empresa->fecha_fin='2025-03-18';
        $empresa->estado_empresa='A';
        $empresa->save();
    }
}
