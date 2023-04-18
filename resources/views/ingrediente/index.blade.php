
Listado de Ingredientes

<a href="{{ url('ingrediente/create') }}"></a>
<table>
    <thead>
        <th>#</th>
        <th>Nombre</th>
        <th>Cantidad</th>
        <th>Unidad</th>
    </thead>
    <tbody>
        @foreach($ingredientes as ingrediente)

        <tr>
            <td>{{ $ingrediente->id }}</td>
            <td>{{ $ingrediente->nombre}}</td>
            <td>{{ $ingrediente->cantidad }}</td>
            <td>{{ $ingrediente->unidad }}</td>
        </tr>

        @endforeach
    </tbody>




</table>
