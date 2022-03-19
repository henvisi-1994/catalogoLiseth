<?php

namespace Database\Seeders;

use App\Models\Persona;
use Illuminate\Database\Seeder;

class SeederPersona extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $persona = new Persona();
        $persona->nombre_persona='Janina Liseth';
        $persona->apellido_persona='Madrid Balon';
        $persona->dni='0000000000';
        $persona->id_tipo_ident=1;
        $persona->save();
    }
}
