<h1>{{ $pizza->nombre }}</h1>
<h2>Precio: {{ $pizza->precio }}</h2>
<p>Descripción: {{ $pizza->descripcion }}</p>
<h3>Ingredientes:</h3>
<ul>
    @foreach ($pizza->ingredientes as $ingrediente)
        <li>{{ $ingrediente->nombre }}</li>
    @endforeach
</ul>