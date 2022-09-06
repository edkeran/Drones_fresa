<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolConsultaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->nombre = 'consulta';
        $role->descripcion = 'Consultor';
        $role->code_itrn = 'CONSUL';
        $role->save();
    }
}
