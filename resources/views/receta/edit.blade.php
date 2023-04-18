Editar listado de receta

<form action="{{url('/receta/'. $receta->id)}}" method="POST">
    @csrf 
    {{method_field('PUT')}}
    @include('receta.form')
</form>