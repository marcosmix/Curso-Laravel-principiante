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
            @foreach ($categorias as $categoria)
                <tr>
                    <td>
                        {{$categoria->id}}
                    </td>
                    <td>
                        {{$categoria->nombre}}
                    </td>
                    <td>
                        <a href="{{route('categorias.show',$categoria)}}">Ver</a>
                    </td>
                    <td>
                        <a href="{{route('categorias.edit',$categoria)}}">Editar</a>
                    </td>
                    <td>
                        <form action="{{route('categorias.destroy',$categoria)}}" 
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
    <a href="{{route('categorias.create')}}">Agregar</a>
</div>