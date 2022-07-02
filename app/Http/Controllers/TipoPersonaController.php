<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoPersona;
class TipoPersonaController extends Controller
{
    public function render()
    {
        $t= TipoPersona::all();
        return view('registro', compact('t'));
    }
}
