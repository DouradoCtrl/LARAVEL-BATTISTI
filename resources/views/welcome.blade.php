@extends('layouts.main')

@section('title', "Principal")

@section('content')

<!-- Seção com Banner e Input -->
<section class="banner-section" style="background-image: url('img/blue-abstract-background/blue_abstract_lines_2.jpg'); background-size: cover; background-position: center; padding: 100px 0;">
    <div class="container text-center text-white">
        <h2 class="display-4 mb-4 fw-bold">Busque um Evento</h2>
        <div class="input-group input-group-lg w-50 mx-auto">
            <input type="text" class="form-control" placeholder="Digite o nome do evento" aria-label="Digite o nome do evento">
            <button class="btn btn-primary" type="button">
                <i class="bi bi-search"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-ubuntu" viewBox="0 0 16 16">
                    <path d="M2.273 9.53a2.273 2.273 0 1 0 0-4.546 2.273 2.273 0 0 0 0 4.547Zm9.467-4.984a2.273 2.273 0 1 0 0-4.546 2.273 2.273 0 0 0 0 4.546M7.4 13.108a5.54 5.54 0 0 1-3.775-2.88 3.27 3.27 0 0 1-1.944.24 7.4 7.4 0 0 0 5.328 4.465c.53.113 1.072.169 1.614.166a3.25 3.25 0 0 1-.666-1.9 6 6 0 0 1-.557-.091m3.828 2.285a2.273 2.273 0 1 0 0-4.546 2.273 2.273 0 0 0 0 4.546m3.163-3.108a7.44 7.44 0 0 0 .373-8.726 3.3 3.3 0 0 1-1.278 1.498 5.57 5.57 0 0 1-.183 5.535 3.26 3.26 0 0 1 1.088 1.693M2.098 3.998a3.3 3.3 0 0 1 1.897.486 5.54 5.54 0 0 1 4.464-2.388c.037-.67.277-1.313.69-1.843a7.47 7.47 0 0 0-7.051 3.745"/>
                  </svg></i> <!-- Ícone de pesquisa, você pode adicionar o Bootstrap Icons -->
            </button>
        </div>
    </div>
</section>

<div class="container mt-5">
    <div class="row justify-content-center">   
        @foreach ($events as $event )
        <!-- Card -->
        <div class="col-md-4 mb-5">
            <div class="card">
                <img src="img/openfest24.webp" class="card-img-top" alt="Imagem do card">
                <div class="card-body">
                    <h5 class="card-title">{{$event->title}}</h5>
                    <p class="card-date">21/02/2025</p>
                    <p class="card-text">{{$event->description}}</p>
                    <a href="#" class="btn btn-primary">Saiba mais</a>
                </div>
            </div>
        </div>
        <!-- Fim do Card -->      
        @endforeach 
    </div>
</div>


@endsection