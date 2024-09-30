@extends('layouts.app')

@section('content')
    <h1>Criar Ingresso</h1>
    <form action="{{ route('ingressos.store') }}" method="POST">
        @csrf
        <div>
            <label for="quantidade">Quantidade:</label>
            <input type="number" name="quantidade" id="quantidade" required>
        </div>
        <div>
            <label for="preco">Preço:</label>
            <input type="number" step="0.01" name="preco" id="preco" required>
        </div>
        <div>
            <label for="evento_id">Evento:</label>
            <select name="evento_id" id="evento_id" required>
                @foreach ($eventos as $evento)
                    <option value="{{ $evento->id }}">{{ $evento->nome }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit">Salvar</button>
    </form>
@endsection