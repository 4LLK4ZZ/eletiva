@extends('layouts.app')

@section('content')
<h1>Detalhes do Evento</h1>
<p>Nome: {{ $evento->nome }}</p>
<p>Descrição: {{ $evento->descricao }}</p>
<p>Data: {{ $evento->data }}</p>
<a href="{{ route('eventos.index') }}">Voltar</a>
@endsection