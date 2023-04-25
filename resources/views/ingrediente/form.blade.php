Nombre: 
    <input style="background-color:#E6E6FA" type="text" name="nombre" id="nombre" value="{{ isset($ingrediente)?$ingrediente->nombre:'' }}" /><br />
<br>
Cantidad:
    <input style="background-color:#E6E6FA" type="number" name="cantidad" id="cantidad" value="{{ isset($ingrediente)?$ingrediente->cantidad:'' }}" /><br />
<br>
Unidad:
    <input style="background-color:#E6E6FA" type="text" name="unidad" id="unidad" value="{{ isset($ingrediente)?$ingrediente->unidad:'' }}" /><br />
<br>
    <button style="background-color:#DAF7A6" type="submit" >Guardar</button>
