<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
//use Illuminate\Support\Facades\Session;

class RegisterContoller extends Controller
{
    public Function create(){

        return view('auth.register');

    }

    public function store(){

        $user = User::create(request(['name', 'email', 'password']));

        auth()->login($user);
        return redirect()->to('/');
        
     /*   //Estos son las datos que envia el formulario de la funcion create anterior
        $login = login::create(request(['name','email', 'password'])); 
     // $login = Login::create($request->only('name','email','password'));
        auth()->login($login);//Cuando nos registremos nos inicie sesion
        Session::flash('mensaje', 'Registro creado con exito');
        return redirect()->to('/');//Despues de crear el usuario que nos dirija a la pagina de <bienvenida></bienvenida>*/

    }
}
