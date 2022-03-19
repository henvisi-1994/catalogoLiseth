<?php

namespace Database\Seeders;

use App\Models\Empleado;
use App\Models\Persona;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SeederEmpleado extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $persona=Persona::where('id_persona',1)->first();
        $nombre=$persona->nombre_persona[0];
        $apellido=$persona->apellido_persona;
        $username= $nombre.'_'.$apellido;
        User::create([
            'name' =>$username,
            'email' => 'lisethnovedades@gmail.com',
            'password' => Hash::make('liseth2022**'),
        ]);
        $usuario = User::latest('id')->first();
        Empleado::create([
            'id_empresa' =>1,
            'id_cargo' => 1,
            'id_usu' =>$usuario ->id,
            'id_persona' => 1,
            'estado_empl' =>'A',
        ]);
    }
}
