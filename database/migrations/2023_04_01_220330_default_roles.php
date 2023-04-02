<?php

use App\Models\Role;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DefaultRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         // Crear los roles por defecto
         $roles = [
            [
                'nombre' => 'Administrador',
                'descripcion' => 'Rol de administrador del aplicativo',
                'code_itrn' => 'ADMIN'
            ],
            [
                'nombre' => 'Analista Agronomo',
                'descripcion' => 'Rol de editor del sitio',
                'code_itrn' => 'ANALISTA'
            ],
            [
                'nombre' => 'Usuario',
                'descripcion' => 'Rol de usuario que carga las imagenes a estudiar',
                'code_itrn' => 'USER'
            ]
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
