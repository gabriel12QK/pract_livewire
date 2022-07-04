<div>
<div>
    @include("livewire.$view")
</div>
<div >
    <div >
        <table >
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">tipo</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
                @foreach ($t as $item)
                    <tr style="">
                        <td >{{ $item->id }}</td>
                        <td>{{ $item->tipo }}</td>
                        <td>
                            <button  wire:click="edit({{ $item->id }})" style="color: rgb(0, 81, 255)" >Editar</button>
                        </td>
                        <td>
                            <button type="button" wire:click='destroyL({{$item->id}})' style="color: rgb(255, 0, 0)" >Borrar</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>

