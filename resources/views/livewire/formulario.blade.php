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
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->tipo }}</td>
                        <td>
                            <button  wire:click="edit({{ $item->id }})">Editar</button>
                        </td>
                        <td>
                            <button type="button" wire:click='destroyL({{$item->id}})' >Borrar</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>

