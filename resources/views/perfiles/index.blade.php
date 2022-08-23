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
                <th>Nombre</th>
                <th>Apellido</th>
                <th></th>
                <th></th>
            </thead>   
        </tr>
        <tbody>
            @foreach ($perfiles as $perfil)
                <tr>
                    <td>
                        {{$perfil->id}}
                    </td>
                    <td>
                        {{$perfil->nombre}}
                    </td>
                     <td>
                        {{$perfil->apellido}}
                    </td>
                  
                    <td>
                        <a href="{{route('perfiles.edit',$perfil->id)}}">Editar</a>
                    </td>
                    <td>
                        <form action="{{route('perfiles.destroy',$perfil->id)}}" 
                                  method="POST">
                                  @csrf 
                                  @method('DELETE')
                                  <button class = ""
                                           type = "submit"
                                        onclick = "return confirm('¿Estas segura/o de eliminar esta perfil?')">
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
    <a href="{{route('perfiles.create')}}">Agregar</a>
</div>