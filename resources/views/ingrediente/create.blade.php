
Crear ingrediente

<form action="{{ url('/ingrediente') }}" method="POST">
    @csrf
    @include('ingrediente.form')
</form>