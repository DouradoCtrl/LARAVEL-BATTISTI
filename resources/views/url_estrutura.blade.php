@extends('layouts.main')

@section('title') {{-- forma não abreviada --}}
    Teste URL
@endsection

@section('content')

    <h1>Teste de Valores URL</h1>

    @php
        echo $_GET['nome'] . "<br>";            
        echo $_GET['idade'] . "<br>";
        echo $_GET['telefone'] . "<br>";
        echo $_GET['hobbie'] . "<br>";
    @endphp

@endsection
