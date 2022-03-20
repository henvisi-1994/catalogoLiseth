<?php

namespace Database\Seeders;

use App\Models\Bodega;
use App\Models\Direcion;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class SeederBodega extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $direccion = new Direcion();
        $direccion->direcion ='';
        $direccion->calle = '';
        $direccion->numero = '';
        $direccion->piso = '';
        $direccion->telefono ='';
        $direccion->movil = '';
        $direccion->estado_direccion ='A';
        $direccion->id_ciudad	 =1;
        $direccion->save();
        $dir = Direcion::latest('id_direccion')->first();
        $bodegas = new Bodega();
        $bodegas->id_ciudad = 1;
        $bodegas->nombre_bod ='Bodega de Novedades Liseth';
        $bodegas->id_direccion =  $dir ->id_direccion;
        $bodegas->telef_bod ='';
        $bodegas->cel_bod = '';
        $bodegas->estado_bod = 'A';
        $bodegas->nomb_contac_bod ='Janina Liseth Madrid balon';
        $bodegas->fecha_inicio = Carbon::now();
        $bodegas->fecha_fin ='2025-03-19';
        $bodegas->save();
    }
}
