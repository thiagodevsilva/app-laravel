<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
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
    </body>
</html>
