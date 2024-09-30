@extends('layouts.app')

@section('content')
    <h1>Criar Evento</h1>
    <form action="{{ route('eventos.store') }}" method="POST">
        @csrf
        <div>
            <label for="nome">Nome do Evento:</label>
            <input type="text" name="nome" id="nome" required>
        </div>
        <div>
            <label for="descricao">Descrição do Evento:</label>
            <input type="text" name="descricao" id="descricao" required>
        </div>
        <div>
            <label for="data_evento">Data do Evento:</label>
            <input type="date" name="data_evento" id="data_evento" required>
        </div>
        <button type="submit">Salvar</button>
    </form>
@endsection
