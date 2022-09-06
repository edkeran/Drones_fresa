<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{    

    public function crearUsuario(Request $request){
        $email = $request->input('mail');
        $name = $request->input('nombre');
        $lastName = $request->input('apellido');
        $password = $request->input('password');
        $verifyPassword = $request->input('passwordConfirm');
        $address = $request->input('direccion');
        $phone = $request->input('telefono');
        if($this->checkPassword($password,$verifyPassword) == true){
            $usuario = new User();
            $rolConsulta = Role::where('code_itrn', 'CONSUL')->get()->first();
            $usuario->fill([
                'name' => $name,
                'email' => $email,
                'password' => $password,
                'last_name' => $lastName ,
                'phone' => $phone,
                'address' => $address
            ]);
            $usuario->save();
            $usuario->roles()->attach($rolConsulta);
            return dd($request,"Usuario Creado Satisfactoriamente");
        }
        return dd($request,"Algo paso");
    }

    private function checkPassword($pass,$verifyPass){
        return $pass == $verifyPass;
    }
   
}
