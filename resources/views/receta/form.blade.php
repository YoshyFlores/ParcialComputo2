Estructura
Nombre:
    <input type="text" name="nombre" id="nombre" value="{{ isset($receta)?$receta->nombre:'' }}" /><br />
Descripcion:
    <input type="text" name="descripcion" id="descripcion" value="{{ isset($receta)?$receta->descripcion:'' }}" /><br />
Tiempo de preparación:
    <input type="number" name="tiempoPreparacion" id="tiempoPreparacion" value="{{ isset($receta)?$receta->tiempoPreparacion:'' }}" /><br />

    <button type="submit" >Guardar</button>