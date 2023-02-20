<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GenericController extends Controller
{
    public function landing (Request $request) {

        return view('landing');
    }
}
