<!--Integrantes: Yosselin Roxana Flores García Código: SMIS537818
                 Harold Enoc Santos Morillo Código: SMIS001621-->
<h2>Editar listado de receta</h2>

<form action="{{url('/receta/'. $receta->id)}}" method="POST">
    @csrf 
    {{method_field('PUT')}}
    @include('receta.form')
</form>