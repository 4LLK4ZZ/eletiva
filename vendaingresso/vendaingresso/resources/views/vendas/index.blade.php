@extends('layouts.app')

@section('content')
    <h1>Lista de Vendas</h1>
    <a href="{{ route('vendas.create') }}">Registrar Nova Venda</a>
    <ul>
        @foreach ($vendas as $venda)
            <li>
                Cliente: {{ $venda->cliente->nome }} - Ingresso: {{ $venda->ingresso->tipo }} - Data: {{ $venda->data_venda }}
            </li>
            <a href="{{ route('vendas.edit', $venda->id) }}">Editar</a>
            <form action="{{ route('vendas.destroy', $venda->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Excluir</button>
            </form>
        @endforeach
    </ul>
@endsection
