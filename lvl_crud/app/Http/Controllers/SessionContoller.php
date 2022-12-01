<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SessionContoller extends Controller
{
    public Function create(){

        return view('auth.login');

    }

       public function store(){
       /* if(auth()->attempt(request(['email','password'])) == false){
            return back()->withErrors([
                'message' => 'El correo o la contraseña son incorrectas'

            ]);
        }
       return redirect()->to('/');*/
    }

    public function destroy(){
        auth()->logout();

    }
}
