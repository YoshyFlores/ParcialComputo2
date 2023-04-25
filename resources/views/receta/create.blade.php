<!--Integrantes: Yosselin Roxana Flores García Código: SMIS537818
                 Harold Enoc Santos Morillo Código: SMIS001621-->
<h2 >Crear listado de recetas </h2>
<form action="{{url('/receta')}}" method="POST">
    @csrf 
    @include('receta.form')
</form>