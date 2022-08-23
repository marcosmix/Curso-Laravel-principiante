<form action="{{route('perfiles.store')}}" method="post">
    @csrf
    <input type="text" name="nombre" id="">
    <input type="text" name="apellido" id="">
    <input type="submit" value="Guardar">
</form>
