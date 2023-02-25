<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class GenericController extends Controller
{
    public function landing (Request $request) {

        return view('landing');
    }

    public function generateToken (Request $request){

        //TODO: Verificar se o user e administrador
            if(auth()->user()->hasRole('admin')){

        $user = User::find(auth()->id());
        $token = $user->createToken($user->name. '\'s token')->accessToken;

                dd($token);
       }else {
       // dd('Erro que indica que o user nao tem permissao para gerar o token');
      dd('Nao tem permissao para gerar o token');
    }


    }
}
