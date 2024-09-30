@extends('layouts.app')

@section('content')
    <h1>Lista de Clientes</h1>
    <a href="{{ route('clientes.create') }}">Adicionar Novo Cliente</a>
    <ul>
        @foreach ($clientes as $cliente)
            <li>{{ $cliente->nome }} - {{ $cliente->email }} - {{ $cliente->telefone }}</li>
            <a href="{{ route('clientes.edit', $cliente->id) }}">Editar</a>
            <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Excluir</button>
            </form>
        @endforeach
    </ul>
@endsection
