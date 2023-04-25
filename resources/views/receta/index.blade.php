<!--Integrantes: Yosselin Roxana Flores García Código: SMIS537818
                 Harold Enoc Santos Morillo Código: SMIS001621-->
<h2>Listado de recetas</h2>
<a style="background-color:	LightCyan" href="{{ url('receta/create') }}">Nuevo Receta</a>
<table>
    <thead>
        <th>#</th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Tiempo de preparación</th>
        <th>Actions</th>
    </thead>
    <tbody>
        @foreach($recetas as $receta)
        <tr>
            <td style="background-color:LightPink">{{ $receta->id }}</td>
            <td >{{ $receta->nombre }}</td>
            <td >{{ $receta->descripcion }}</td>
            <td >{{ $receta->tiempoPreparacion }}</td>

            <form action="{{ url('/receta/'.$receta->id) }}" method="post">
                @csrf
                {{ method_field('DELETE')}}     
                <td>
                    <a href="{{ route('receta.edit', $receta->id) }}">Editar</a>
                    <input style="background-color:LightPink" type="submit" onclick="return confirm('¿Desea eliminar el registro?')" value="Eliminar">
                </td>

            </form>
        </tr>

        @endforeach
    </tbody>
</table>