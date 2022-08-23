<div
    style="display: flex;"
>

    <table style="
    width: 600px;
    text-align: center;
    ">
        <tr>
            <thead>
                <th>id</th>
                <th>nombre</th>
                <th></th>
                <th></th>
                <th></th>                
            </thead>   
        </tr>
        <tbody>
            @foreach ($etiquetas as $etiqueta)
                <tr>
                    <td>
                        {{$etiqueta->id}}
                    </td>
                    <td>
                        {{$etiqueta->nombre}}
                    </td>
                    <td>
                        <a href="{{route('etiquetas.show',$etiqueta)}}">Ver</a>
                    </td>
                    <td>
                        <a href="{{route('etiquetas.edit',$etiqueta)}}">Editar</a>
                    </td>
                    <td>
                        <form action="{{route('etiquetas.destroy',$etiqueta)}}" 
                                  method="POST">
                                  @csrf 
                                  @method('DELETE')
                                  <button class = ""
                                           type = "submit"
                                        onclick = "return confirm('¿Estas segura/o de eliminar esta categoria?')">
                                        Eliminar
                                  </button>
                            </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div>
    <a href="{{route('etiquetas.create')}}">Agregar</a>
</div>