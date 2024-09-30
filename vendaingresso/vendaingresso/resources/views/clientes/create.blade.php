@extends('layouts.app')

@section('content')
    <h1>Criar Cliente</h1>
    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf
        <div>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            <label for="telefone">Telefone:</label>
            <input type="text" name="telefone" id="telefone">
        </div>
        <button type="submit">Salvar</button>
    </form>
@endsection
