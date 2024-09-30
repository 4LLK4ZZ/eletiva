@extends('layouts.app')

@section('content')
    <h1>Editar Ingresso</h1>
    <form action="{{ route('ingressos.update', $ingresso->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="preco">Preço:</label>
            <input type="number" step="0.01" name="preco" id="preco" value="{{ $ingresso->preco }}" required>
        </div>
        <div>
            <label for="evento_id">Evento:</label>
            <select name="evento_id" id="evento_id" required>
                @foreach ($eventos as $evento)
                    <option value="{{ $evento->id }}" {{ $evento->id == $ingresso->evento_id ? 'selected' : '' }}>
                        {{ $evento->nome }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit">Atualizar</button>
    </form>
@endsection
