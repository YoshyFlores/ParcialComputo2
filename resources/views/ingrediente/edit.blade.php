Editar Ingrediente
<form action="{{ url('/ingrediente/'.$ingrediente->id) }}" method="post">
    @csrf
    {{method_field('PUT')}}
    @include('ingrediente.form')

</form>