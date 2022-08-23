<form action="{{route('perfiles.update',$perfil->id)}}" method="post">
    @csrf
    @method('PUT')
    <input type="text" name="nombre" id="" value="{{old('nombre',$perfil->nombre)}}">
     <input type="text" name="apellido" id="" value="{{old('apellido',$perfil->apellido)}}">
    <input type="submit" value="Guardar">
</form>