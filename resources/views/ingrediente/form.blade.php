Nombre:
    <input type="text" name="nombre" id="nombre" value="{{ isset($ingrediente)?$ingrediente->nombre:'' }}" /><br />
Cantidad:
    <input type="number" name="cantidad" id="cantidad" value="{{ isset($ingrediente)?$ingrediente->cantidad:'' }}" /><br />

Unidad:
    <input type="text" name="unidad" id="unidad" value="{{ isset($ingrediente)?$ingrediente->unidad:'' }}" /><br />

    <button type="submit" >Guardar</button>
