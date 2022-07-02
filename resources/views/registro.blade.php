<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
        <title>Laravel</title>

        @livewireStyles
    </head>
<body>
    <livewire:formulario/>

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
                                <button wire:click="editar({{ $item->id }})">Editar</button>
                            </td>
                            <td>
                                <button type="button" wire:click="destroy({{$item->id}})" >Borrar</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div >
    </div>
    </div>
    @livewireScripts

 </body>
</html>
