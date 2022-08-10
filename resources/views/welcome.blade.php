
@extends('layouts.main')

@section('title', 'TW Events')

@section('content')
        <h1>Título</h1>
        <h3>Variaveis Blade</h3>

        
        <p>{{$nome}}</p>        

        @if ($nome == 'Thiago')
            <p>O nome é Thiago</p>
        @else
            <p>O nome não é Thiago</p>
        @endif

        <h3>Estrutura repetição Blade</h3>
        <h4>For</h4>
        @for ($i = 0 ; $i < count($arr); $i++)
            <p>[{{$i}}] {{ $arr[$i] }}</p>
        @endfor
        
        <h4>Foreach</h4>
        @foreach($nomes as $nome)
            <p>[{{$loop->index}}] {{$nome}}</p>
        @endforeach

        <h3>Declaração direto na View Blade</h3>
        @php
            $teste = 'Uau, deu certo!';
            echo $teste;
        @endphp

        <h3>Comentario Blade</h3>
        <p>Não aparece nem no inspecionar.</p>
        {{-- Comentario --}}

@endsection