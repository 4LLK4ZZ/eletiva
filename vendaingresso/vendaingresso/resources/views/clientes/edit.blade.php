@extends('layouts.app')

@section('content')
    <h1>Editar Cliente</h1>
    <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" value="{{ $cliente->nome }}" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ $cliente->email }}" required>
        </div>
        <div>
            <label for="telefone">Telefone:</label>
            <input type="text" name="telefone" id="telefone" value="{{ $cliente->telefone }}">
        </div>
        <button type="submit">Atualizar</button>
    </form>
@endsection
