<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function getData() {

        return response()->json(['Requisicao realizada com sucesso do metodo question...']);
    }
}
