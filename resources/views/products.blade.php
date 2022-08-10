@extends('layouts.main')

@section('title', 'TW Products')

@section('content')

<h1>Página de produtos</h1>

@if ($busca != '')
<p>O usuário está buscando pelo termo: {{ $busca }}</p>
@endif

@endsection