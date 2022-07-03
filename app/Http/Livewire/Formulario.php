<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\TipoPersona;

class Formulario extends Component
{
   public $view='guardar';
    public $tipo, $_id;
    public function guardar(){
        $tipo= new TipoPersona();
        $tipo->tipo=$this->tipo;
        $tipo->estado=1;
        $tipo->save();
        return back();
    }
    public function render()
    {
        $t = TipoPersona::where('estado',1)->get();
        return view('livewire.formulario', compact('t'));
    }

    public function edit($id){
        $tipo= TipoPersona::find($id);
        $this->_id = $id;
        $this->tipo=$tipo->tipo;
        $this->view = 'editar';
    }
     
    public function update(){
        $tipo =TipoPersona::find( $this->_id);
        $tipo->update([
            'tipo' => $this->tipo
        ]);
        $this->reset();
    }
    public function destroy($id){

        TipoPersona::destroy($id);

    }
    public function destroyL($id){
        
        $tipo = TipoPersona::find($id);
        $tipo->update([
            'estado' => 0
        ]);
        $this->reset();
    }

}
