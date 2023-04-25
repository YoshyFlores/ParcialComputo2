
<h2>Agregar nuevo ingrediente </h2>



    <form  action="{{ url('/ingrediente') }}" method="POST">
    @csrf
    @include('ingrediente.form')
    </form>




