
<!-- 
    <h3>Integrantes </h3> 
        <h4>Harold Enoc Santos Morillo Código: SMIS001621</h4>

        <h4>Yosselin Roxana Flores García Código: SMIS537818 </h4>



-->
    <h2 >Listado de Ingredientes</h2>


<a href="{{ url('ingrediente/create') }}">Nuevo Ingrediente</a>
<table >
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
            <th>{{ $ingrediente->id }}</td>
            <td>{{ $ingrediente->nombre}}</td>
            <td>{{ $ingrediente->cantidad }}</td>
            <td>{{ $ingrediente->unidad }}</td>
            
            <form action="{{ url('/ingrediente/'.$ingrediente->id) }}" method="post">
                @csrf
                {{ method_field('DELETE')}}     <!-- define el metodo que se necesita -->
                <td>
                    <a href="{{ route('ingrediente.edit', $ingrediente->id) }}">Editar</a>
                    <input style="background-color:#FF5733" type="submit" onclick="return confirm('¿Está seguro que desea eliminar este ingrediente?')" value="Eliminar">
                </td>

            </form>
        
        </tr>

        @endforeach
    </tbody>


</table>
