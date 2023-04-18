Listado de recetas
<a href="{{ url('receta/create') }}">Nuevo Receta</a>
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
            <td>{{ $receta->id }}</td>
            <td>{{ $receta->nombre }}</td>
            <td>{{ $receta->descripcion }}</td>
            <td>{{ $receta->tiempoPreparacion }}</td>

            <form action="{{ url('/receta/'.$receta->id) }}" method="post">
                @csrf
                {{ method_field('DELETE')}}     <!-- define el metodo que se necesita -->
                <td>
                    <a href="{{ route('receta.edit', $receta->id) }}">Editar</a>
                    <input type="submit" onclick="return confirm('¿Desea eliminar el registro?')" value="Eliminar">
                </td>

            </form>
        </tr>

        @endforeach
    </tbody>
</table>