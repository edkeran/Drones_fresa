<?php

namespace Database\Seeders;

use App\Models\EstadoSolicitud as ModelsEstadoSolicitud;
use EstadoSolicitud;
use Illuminate\Database\Seeder;

class EstadoSolicitudSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estadoPendiente = new ModelsEstadoSolicitud();
        $estadoPendiente->codigo_unico = 'PENDING';
        $estadoPendiente->nombre = 'Pendiente';
        $estadoPendiente->descripcion = 'Estado inicial para el proceso de solicitud de analisis de las imagenes cargadas hacia el rol del agronomo';
        $estadoPendiente->save();


        $estadoAnalisis = new ModelsEstadoSolicitud();
        $estadoAnalisis->codigo_unico = 'REVIEW';
        $estadoAnalisis->nombre = 'Analisis';
        $estadoAnalisis->descripcion = 'Estado para indicar que una solicitud esta siendo gestionada para el analisis de parte del agronomo';
        $estadoAnalisis->save();

        $estadoResuelta = new ModelsEstadoSolicitud();
        $estadoResuelta->codigo_unico = 'COMPLETE';
        $estadoResuelta->nombre = 'Resulta';
        $estadoResuelta->descripcion = 'Estado final con los resultados del analisis cargado de parte del rol del agronomo';
        $estadoResuelta->save();
    }
}
