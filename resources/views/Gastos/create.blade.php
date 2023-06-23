<form action="{{route('gastos.store')}}" method="post">
    @csrf
    <input type="text" name="detalle" id="" placeholder="Detalle del gasto">
<br>
    <input type="number" name="importe" step="0.01" id="" >
<br>

    <input type="date" name="fecha" id="">
<br>
{{-- <input type="hidden" name="fijo" value="false"> --}}

<label for="fijo">Es un gasto fijo?</label>
    <input type="checkbox" name="fijo"  id="fijo">
<br>

    <label for="categoria">Categoria del gasto</label>
<br>

    <select name="id_categoria" id="categoria">
        
        @foreach ($categorias as $categoria)
            <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
        @endforeach

    </select>
<br>

    <label for="perfil">Perfil</label>
<br>

    <select name="id_perfil" id="perfil">
        
        @foreach ($perfiles as $perfil)
            <option value="{{$perfil->id}}">{{$perfil->nombre}}</option>
        @endforeach

    </select>
    <br><br>
    <div>
        @foreach ($etiquetas as $key=>$etiqueta)
        <br>
            <label for="etiquetas[{{$key}}]">{{$etiqueta->nombre}}</label>
            <input type="checkbox" name="etiquetas[{{$key}}]" id="etiquetas[{{$key}}]" value="{{$etiqueta->id}}">
        @endforeach
    </div>
        
<br>
<br>
<div>
    <input type="name" name="nombre_item[]" placeholder="Nombre de item">
    <input type="number" step=0.1 name="importe_item[]" placeholder="Importe">
</div>
<br>
<div>
    <input type="name" name="nombre_item[]" placeholder="Nombre de item">
    <input type="number" step=0.1 name="importe_item[]" placeholder="Importe">
</div>
<br>
<div>
    <input type="name" name="nombre_item[]" placeholder="Nombre de item">
    <input type="number" step=0.1 name="importe_item[]" placeholder="Importe">
</div>
<br><br>
    <input type="submit" value="Guardar">
</form>
