@extends('layouts.app')

@section('content')
    <h1>Editar Venda</h1>
    <form action="{{ route('vendas.update', $venda->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="cliente_id">Cliente:</label>
            <select name="cliente_id" id="cliente_id" required>
                @foreach ($clientes as $cliente)
                    <option value="{{ $cliente->id }}" {{ $cliente->id == $venda->cliente_id ? 'selected' : '' }}>
                        {{ $cliente->nome }}
                    </option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="ingresso_id">Ingresso:</label>
            <select name="ingresso_id" id="ingresso_id" required>
                @foreach ($ingressos as $ingresso)
                    <option value="{{ $ingresso->id }}" {{ $ingresso->id == $venda->ingresso_id ? 'selected' : '' }}>
                        {{ $ingresso->tipo }}
                    </option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="data_venda">Data da Venda:</label>
            <input type="date" name="data_venda" id="data_venda" value="{{ $venda->data_venda }}" required>
        </div>
        <button type="submit">Atualizar</button>
    </form>
@endsection
