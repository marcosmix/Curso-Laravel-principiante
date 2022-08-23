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
            @foreach ($gastos as $gasto)
                <tr>
                    <td>
                        {{$gasto->id}}
                    </td>
                    <td>
                        {{$gasto->detalle}}
                    </td>
                    <td>
                        <a href="{{route('gastos.show',$gasto)}}">Ver</a>
                    </td>
                    <td>
                        <a href="{{route('gastos.edit',$gasto)}}">Editar</a>
                    </td>
                    <td>
                        <form action="{{route('gastos.destroy',$gasto)}}" 
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
    <a href="{{route('gastos.create')}}">Agregar</a>
</div>