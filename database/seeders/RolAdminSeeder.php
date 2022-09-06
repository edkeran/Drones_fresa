<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->nombre = 'admin';
        $role->descripcion = 'Administrador';
        $role->code_itrn = 'ADM';
        $role->save();
    }
}
