@extends('layouts.app')

@section('content')
    <h1>Editar Evento</h1>
    <form action="{{ route('eventos.update', $evento->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="nome">Nome do Evento:</label>
            <input type="text" name="nome" id="nome" value="{{ $evento->nome }}" required>
        </div>
        <div>
            <label for="descricao">Descrição do Evento:</label>
            <input type="text" name="descricao" id="descricao" value="{{ $evento->descricao }}" required>
        </div>
        <div>
            <label for="data">Data do Evento:</label>
            <input type="date" name="data" id="data" value="{{ $evento->data }}" required>
        </div>
        <button type="submit">Atualizar</button>
    </form>
@endsection
