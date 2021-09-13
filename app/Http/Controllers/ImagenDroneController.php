<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ImagenesCapturas;

class ImagenDroneController extends Controller
{
    //
    public function findAll(){
        $lstImagenes = ImagenesCapturas::all();
        if(count($lstImagenes) > 0){
            foreach($lstImagenes as $imageItem){
                dd($imageItem);
            }
        }else{
            dd("No Hay Nada Aun");
        }
    }

    public function create(Request $request){
        //1. Sacar y guardar imagen en el server
        


        //2. Crear y guargar registro en la DB 
        $nombreImagen = $request->input('nombreImage');
        $imageCapturObj = new ImagenesCapturas();
        $imageCapturObj->nombre_imagen = $nombreImagen;
        $imageCapturObj->ruta_imagen = "sdfadsf";
        $imageCapturObj->nombre_server_imagen = "adsfads";
        $imageCapturObj->extension = "png";
        $imageCapturObj->save(); 
        //ImagenesCapturasDB::insert('insert into users (id, name) values (?, ?)', [1, 'Dayle']);
        dd("Registro Creado Satisfactoriamente");
    }

    public function edit(){

    }

    public function delete(){

    }


}
