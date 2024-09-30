@extends('layouts.app')

@section('content')
    <h1>Registrar Venda</h1>
    <form action="{{ route('vendas.store') }}" method="POST">
        @csrf
        <div>
            <label for="cliente_id">Cliente:</label>
            <select name="cliente_id" id="cliente_id" required>
                @foreach ($clientes as $cliente)
                    <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="ingresso_id">Ingresso:</label>
            <select name="ingresso_id" id="ingresso_id" required>
                @foreach ($ingressos as $ingresso)
                    <option value="{{ $ingresso->id }}">{{ $ingresso->tipo }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="data_venda">Data da Venda:</label>
            <input type="date" name="data_venda" id="data_venda" required>
        </div>
        <button type="submit">Registrar</button>
    </form>
@endsection