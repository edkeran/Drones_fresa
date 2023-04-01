<?php

namespace App\Http\Controllers;

use App\Constants\Constants;
use App\Models\Role;
use App\Models\User;
use Doctrine\DBAL\Schema\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
            $usuario = new User();//POO -> Programacion Orientada A Objetos 
            $rolUsuario = Role::where('code_itrn', Constants::USUARIO)->get()->first();
            $password = Hash::make($password);
            $usuario->fill([
                'name' => $name,
                'email' => $email,
                'password' => $password,
                'last_name' => $lastName ,
                'phone' => $phone,
                'address' => $address
            ]);
            $usuario->save();
            $usuario->roles()->attach($rolUsuario);
            return dd($request,"Usuario Creado Satisfactoriamente");
        }
        return dd($request,"Las contraseñas");
    }

    private function checkPassword($pass,$verifyPass){
        return $pass == $verifyPass;
    }

    public function loginUsuario(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect("analisisConsultor");
        }
    }

}
