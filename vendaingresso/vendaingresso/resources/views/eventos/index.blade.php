@extends('layouts.app')

@section('content')
<h1>Lista de Eventos</h1>
<a href="{{ route('eventos.create') }}">Adicionar Novo Evento</a>
<ul>
    @foreach ($eventos as $evento)
    <li>
        <strong>Nome:</strong> {{ $evento->nome }} <br>
        <strong>Descrição:</strong> {{ $evento->descricao }} <br>
        <strong>Data:</strong> {{ \Carbon\Carbon::parse($evento->data_evento)->format('d/m/Y') }} <br>
    </li>
    <a href="{{ route('eventos.edit', $evento->id) }}">Editar</a>
    <form action="{{ route('eventos.destroy', $evento->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Excluir</button>
    </form>
    @endforeach
</ul>
@endsection