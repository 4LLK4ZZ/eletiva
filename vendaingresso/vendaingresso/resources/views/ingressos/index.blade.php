@extends('layouts.app')

@section('content')
    <h1>Lista de Ingressos</h1>
    <a href="{{ route('ingressos.create') }}">Adicionar Novo Ingresso</a>
    <ul>
        @foreach ($ingressos as $ingresso)
            <li>
                <strong>Preço:</strong> R$ {{ number_format($ingresso->preco, 2, ',', '.') }} <br>
                <strong>Evento:</strong> {{ $ingresso->evento->nome }} <br>
                <strong>Quantidade:</strong> {{ $ingresso->quantidade }} <br>  <!-- Adicionando quantidade -->
                <!-- Adicione mais campos aqui conforme necessário -->
            </li>
            <a href="{{ route('ingressos.edit', $ingresso->id) }}">Editar</a>
            <form action="{{ route('ingressos.destroy', $ingresso->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Excluir</button>
            </form>
        @endforeach
    </ul>
@endsection
