@extends('layouts.main')

@section('title', "Principal")

@section('content')

    <h1>Dourado</h1>

    <!-- Blade condicionais -->
    @if(10 < 18)
        <p>Verdadeiro</p>
    @endif

    <p>{{$nome}}</p>
    @if ($nome == "Samuel")
        <p>O seu nome é {{$nome}} e você tem {{$idade}} anos e trabalha como {{$profissao}}</p>
    @elseif ($nome == "Matheus")
        <p>O seu nome é {{$nome}} e você tem {{$idade}} anos</p>
    @else
        <p>O seu nome não é Samuel e nem Matheus</p>
    @endif

    <!-- Loops blade -->
    @for($i = 0; $i < count($arr); $i++)
        <p>{{$arr[$i]}} - {{$i}}</p>
    @endfor

    @foreach ($nomes as $nome)
        <p>{{$loop->index}}</p>
        <p>{{$nome}}</p>
    @endforeach
    

    <!-- PHP puro -->
    @php
        $nomeofc = "samuel";
        echo $nomeofc;
    @endphp

    {{-- Este é o comentário no blade (anônimo)--}}

@endsection
