<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ImagenesCapturas;
use Illuminate\Support\Facades\Storage;

class ImagenDroneController extends Controller
{
    
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
        //Obtengo el ID del usuario actual de la session
        foreach ($request->file('imageFileStore') as $image) {
            $nombreImagen = time().uniqid().$request->input('nombreImage').'.'.$image->extension();
            $path = $image->storeAs('dronePictures',$nombreImagen);
            $imageCapturObj = new ImagenesCapturas();
            $imageCapturObj->nombre_imagen = $nombreImagen;
            $imageCapturObj->ruta_imagen = $path;
            $imageCapturObj->nombre_server_imagen = time().uniqid().$request->input('nombreImage');
            $imageCapturObj->extension = $image->extension();
            $imageCapturObj->save(); 
        }
        dd($request->file('imageFileStore'));
        dd("Registros creados satisfactoriamente");
    }

    public function edit(){

    }

    public function delete(){

    }


}
