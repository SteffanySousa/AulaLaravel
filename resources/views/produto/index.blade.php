 
<h3>Essa é a view index</h3>

@foreach($produtos as $produto)
    <p>Nome: {{ $produto->nome }} Tel: {{ $produto->valor }}</p>
@endforeach