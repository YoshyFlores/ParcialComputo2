
Listado de Ingredientes

<a href="{{ url('ingrediente/create') }}">Nuevo Ingrediente</a>
<table>
    <thead>
        <th>#</th>
        <th>Nombre</th>
        <th>Cantidad</th>
        <th>Unidad</th>
        <th>Actions</th>
    </thead>
    <tbody>
        @foreach($ingredientes as $ingrediente)

        <tr>
            <td>{{ $ingrediente->id }}</td>
            <td>{{ $ingrediente->nombre}}</td>
            <td>{{ $ingrediente->cantidad }}</td>
            <td>{{ $ingrediente->unidad }}</td>
            
            <form action="{{ url('/ingrediente/'.$ingrediente->id) }}" method="post">
                @csrf
                {{ method_field('DELETE')}}     <!-- define el metodo que se necesita -->
                <td>
                    <a href="{{ route('ingrediente.edit', $ingrediente->id) }}">Editar</a>
                    <input type="submit" onclick="return confirm('¿Desea eliminar el registro?')" value="Eliminar">
                </td>

            </form>
        
        </tr>

        @endforeach
    </tbody>




</table>
