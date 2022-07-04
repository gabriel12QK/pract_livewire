<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\TipoPersona;

class Formulario extends Component
{
   public $view='guardar';
    public $tipo, $_id;
// metodo para guardar 
    public function guardar(){
        $tipo= new TipoPersona();
        $tipo->tipo=$this->tipo;
        $tipo->estado=1;
        $tipo->save();
    }
//metodo para mostrar
    public function render()
    {
        $t = TipoPersona::where('estado',1)->get();
        return view('livewire.formulario', compact('t'));
    }
//metodo para buscar el dato a editar
    public function edit($id){
        $tipo= TipoPersona::find($id);
        $this->_id = $id;
        $this->tipo=$tipo->tipo;//mostrar el dato al realizar la busqueda primero ubicamos el nombre del cuadro de texto luego la variable y por ultimo el nombre de la columna
        $this->view = 'editar';
    }
//metodo para editar el dato con el metodo update 
    public function update(){
        $tipo =TipoPersona::find( $this->_id);
        $tipo->update([
            'tipo' => $this->tipo
        ]);
        $this->reset();
    }
//borrado fisico
    public function destroy($id){

        TipoPersona::destroy($id);

    }
//borrado logico con metodo update
    public function destroyL($id){
        
        $tipo = TipoPersona::find($id);
        $tipo->update([
            'estado' => 0
        ]);
        $this->reset();
    }

    public function limpiar(){
        $this->tipo="";
    }
     
}
