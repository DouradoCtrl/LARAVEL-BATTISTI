@extends('layouts.main')
@section('title', 'Produto')
@section('content')
    @if($id == null)
        <h3>Nada a ser mostrado</h3>
    @else
        <h3>Exibindo produtos id: {{$id}}</h3>
    @endif
@endsection

