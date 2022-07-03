<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoPersona;
class TipoPersonaController extends Controller
{
    public function index()
    {
       
        return view('registro');
    }
}
