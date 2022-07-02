<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\TipoPersona;

class Formulario extends Component
{
    public $tipo;
    public function guardar(){
        $tipo= new TipoPersona();
        $tipo->tipo=$this->tipo;
        $tipo->save();
        return back();
    }



    public function editar($id){
        $tipo= TipoPersona::find($id);
        $this->tipo=$tipo->tipo;
        return redirect('editar');
    }
     
    public function update(){
        $tipo= new TipoPersona();
        $tipo->tipo=$this->tipo;
        $tipo->save();
        return redirect('registro');
    }
    public function destroy($id){

        Product::destroy($id);

    }



}
