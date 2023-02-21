<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Traits\HelperTrait;
use Illuminate\Http\Request;

class QuestionController extends Controller
{

    use HelperTrait;

    public function index(Request $request) {

        return $this->processQuestions($request);
    }


    public function store(Request $request) {

        return response()->json(['error'=>'Do momento nao e possivel adicionar pergunta'], 403);
    }

    public function show(Request $request, Question $question) {

        return response()->json(['error'=>'Do momento nao e possivel mostrar detalhes de uma pergunta'], 403);
    }

    public function update(Request $request, Question $question) {

        return response()->json(['error'=>'Do momento nao e possivel actualizar a pergunta'], 403);
    }

    public function destroy(Request $request, Question $question) {

        return response()->json(['error'=>'Do momento nao e possivel remover a pergunta'], 403);
    }
}
