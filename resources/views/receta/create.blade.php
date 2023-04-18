Crear listado de recetas
<form action="{{url('/receta')}}" method="POST">
    @csrf 
    @include('receta.form')
</form>