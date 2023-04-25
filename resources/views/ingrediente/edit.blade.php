
<h2>Editar Ingrediente</h2>

<br>

<form action="{{ url('/ingrediente/'.$ingrediente->id) }}" method="post">
    @csrf
    {{method_field('PUT')}}
    @include('ingrediente.form')

</form>