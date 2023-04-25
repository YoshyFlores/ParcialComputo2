<!--Integrantes: Yosselin Roxana Flores García Código: SMIS537818
                 Harold Enoc Santos Morillo Código: SMIS001621-->
<h3>Nombre:
    <input type="text" name="nombre" id="nombre" style="background-color:thistle" value="{{ isset($receta)?$receta->nombre:'' }}" /><br /><br/>
Descripcion:
    <input type="text" name="descripcion" id="descripcion" style="background-color:thistle" value="{{ isset($receta)?$receta->descripcion:'' }}" /><br /><br/>
Tiempo de preparación:
    <input type="number" name="tiempoPreparacion" id="tiempoPreparacion" style="background-color:thistle" value="{{ isset($receta)?$receta->tiempoPreparacion:'' }}" /><br /><br/>

    <button type="submit" >Guardar</button> </h3>