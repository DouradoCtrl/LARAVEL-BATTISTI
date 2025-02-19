# LARAVEL CURSO - BATTISTI

Model: Maior parte da lógica
View: Interface Blade
Controller: 

**Recursos:**
- Artisan (database)
- Migration (database)
- Blade (template engine)

**Característica:**
- Estrutura de pastas simples
- Live para código


## ROTAS E VIEWS
> **Rotas:** acessos de páginas são por meio das rotas (url), qual método acessa

>**Views:** Representação gráficas das páginas

>**Templates:** Onde há a estruturação da páginas html
>Também renderizam dados dinâmicos por meio do PHP

**Comandos para iniciar a aplicação:**
```bash
php artisan server
composer run dev
```


## BLADE
- Template engine do laravel
- Possibilita views dinâmicas
- Views responsabilidades do blade

**Blade condicionais:**
```php
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
```

**Blade loops:**
```php
<!-- Loops blade -->

	@for($i = 0; $i < count($arr); $i++)
		<p>{{$arr[$i]}} - {{$i}}</p>

	@endfor

	@foreach ($nomes as $nome)
		<p>{{$loop->index}}</p>
		<p>{{$nome}}</p>
	@endforeach

```

**PHP puro**
```php
<!-- PHP puro -->
@php
	$nomeofc = "samuel";
	echo $nomeofc;
@endphp
```

**Routes**
```php
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $nome = "Samuel";
    $idade = "20";
    $arr = [1,2,3,4,5];

    $nomes = ["maria", "brenda", "ana", "Iury"];
    return view('welcome', 
        [
            'nome' => $nome, 
            'idade' => $idade, 
            'profissao' => 'programador',
            'arr' => $arr,
            'nomes' => $nomes
        ]);
});

Route::get('/test', function () {

return view('test');

});
```

## ARQUIVOS ESTÁTICOS
obs: apenas ensinou como linkar js, css

## LAYOUT COM BLADE
- Um header para cada página
- **Layout:** Reutilizar partes de códigos

```php
{{-- main.blade --}}
<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	{{-- BOOSTRAP --}}
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	{{-- FONTES DO GOOGLE --}}
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	{{-- CSS E JS DA APLICAÇÃO --}}
	<link rel="stylesheet" href="/css/styles.css">
	<script src="/js/script.js"></script>
	<title>@yield('title')</title>
	</head>
	<body>
		@yield('content')
	<footer>
		<p>Dourado Dev &copy; 2025</p>
	</footer>
	</body>
</html>
```

CLASSE QUE USA O LAYOUT COM HERANÇA
```php
@extends('layouts.main') #extendeu
@section('title', 'Produtos')
@section('content')
	<h1 class="">Tela de produtos</h1>
@endsection
```


## COMO USAR PARÂMETROS NA ROTAS:
- **Variáveis restritas as suas respectivas views ou controllers**
![[Pasted image 20250215144506.png]]
### OBRIGATÓRIOS
**{ID} = OBRIGATÓRIO**
	
```php
/* ARQUIVO DE ROTA*/
/* PARÂMETRO OBRIGATÓRIO*/
Route::get('/produtos/{id}', function ($id) {
	return view('product', ['id' => $id]);
});

/* ISSO É UMA ENTRADA DE PARÂMETROS POR MEIO DE UMA URL DA APLICAÇÃO
	LEMBRE DE LINGUAGEM C 
	int somar(n1, n2) {
		return n1 + n2;
	}

*/

```


```php
@extends('layouts.main')  
@section('title', 'Produto')
@section('content')
	<h3>Exibindo produtos id: {{$id}}</h3>
@endsection

```
*Entrada de dados é retornada na view, por meio da URL*

### OPCIONAIS
**? = OPCIONAL**
```php
/*ARQUIVO DE ROTA*/
/* PARÂMETRO OPCIONAL */
/* CASO NENHUM VALOR SEJA PASSADO NO PARÂMETRO O VALOR DEFAULT SERÁ NULL */
Route::get('/produtos_opcional/{id?}', function ($id = null) {
	return view('product', ['id' => $id]);
});

```

```php
/*ARQUIVO DE VIEW*/
@extends('layouts.main')
@section('title', 'Produto')
@section('content')
	@if($id == null)
		<h3>Nada a ser mostrado</h3>
	@else
		<h3>Exibindo produtos id: {{$id}}</h3>
	@endif

@endsection
```

### QUERY PARAMETERS
- [[Estrutura de URLs e Parâmetros de Consulta]]

**Routes:**
```php
/* URL: http://localhost:8000/produtos_query?search=camisa */

Route::get('/produtos_query', function () {
	$busca = request('search');
	return view('produtos_query', ['busca' => $busca]);
});
```
**O que aconteceu ?**
1. O valor do 'search' presente na URL foi captura pela função **request**
2. Armazenado na variável busca e repassado para o view, para que desse forma pudesse ser realizado.

**View:**
```php
@extends('layouts.main')
@section('title', 'Produto')
@section('content')
	<h1>TELA DE PRODUTOS</h1>
	@if($busca != '')
		<p>O usuário está buscando por {{$busca}}</p>
	@else
		<p>Nenhuma busca encontrada</p>
	@endif
@endsection
```

## CONTROLLERS
- Condensam a maior parte da lógica
- Enviar e esperar resposta do banco de dados
- Criados via artisan
- Comum retornar uma view ou redirecionar para uma URL pelo controller

## CONEXÃO AO BANCO DE DADOS MYSQL
- Configurado no `.env`
	- Maior liberdade e segurança
- Utiliza ORM (OBject Relational Mapping) chamada Eloquent
- Utiliza migrations para criação de tabelas


## MIGRATION
- Versionamento do banco de dados
- Pode avançar ou retroceder
- Adicionar ou remover
- Migrate status
### COMANDOS (basics)

`php artisan migrate`
- cria a tabela no banco de dados

`php artisan migrate:status`
- vê o estado da migrate

`php artisan make:migration create_users_table`
- cria a migration

`php artisan migrate:fresh`
- Deleta e gera denovo

## MIGRATION V2

> CONCEITO

ADICONAR COLUNA
ROLL BACK
- FAZER UM TESTE COM DADOS ADICIONADO NA TABELA E ADICIONAR UMA NOVA COLUNA