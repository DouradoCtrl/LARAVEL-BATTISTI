### **Estrutura básica de uma URL:**
```
http://site.com/caminho/recurso?parametro1=valor1&parametro2=valor2
```

1. **`http://` ou `https://`**:
   - Define o protocolo usado para acessar o site (HTTP ou HTTPS).

2. **`site.com`**:
   - É o domínio do site (o endereço principal).

3. **`/caminho/recurso`**:
   - Define o caminho para um recurso específico no servidor.
   - Por exemplo, `/produtos` pode ser uma página que lista produtos.

4. **`?`**:
   - Indica o início dos **parâmetros de consulta** (query parameters).
   - Tudo que vem depois do `?` são parâmetros que podem ser usados para enviar dados para o servidor.

5. **`parametro1=valor1`**:
   - São os **parâmetros** e seus **valores**.
   - Eles são sempre no formato `nome=valor`.

6. **`&`**:
   - Usado para separar múltiplos parâmetros.
   - Exemplo: `?nome=João&idade=25`.

---

### **Quando usar cada um?**

#### 1. **`/` (barra)**:
- Usado para separar **caminhos** no servidor.
- Exemplo:
  ```
  http://site.com/produtos
  http://site.com/produtos/123
  ```
  - Aqui, `/produtos` e `/produtos/123` são caminhos que podem representar, por exemplo, uma lista de produtos ou um produto específico com ID 123.

#### 2. **`?` (ponto de interrogação)**:
- Usado para iniciar os **parâmetros de consulta** (query parameters).
- Exemplo:
  ```
  http://site.com/produtos?categoria=livros
  ```
  - Aqui, `categoria=livros` é um parâmetro que pode ser usado para filtrar produtos por categoria.

#### 3. **`=` (igual)**:
- Usado para atribuir um **valor** a um **parâmetro**.
- Exemplo:
  ```
  http://site.com/produtos?categoria=livros&ordenar=preco
  ```
  - Aqui, `categoria=livros` e `ordenar=preco` são parâmetros com valores específicos.

---

### **Exemplos Práticos:**

#### Exemplo 1: URL com caminho e parâmetros
```
http://site.com/produtos?categoria=livros&ordenar=preco
```
- **Caminho:** `/produtos` (página de produtos).
- **Parâmetros:**
  - `categoria=livros` (filtra produtos da categoria "livros").
  - `ordenar=preco` (ordena os produtos por preço).

#### Exemplo 2: URL com múltiplos parâmetros
```
http://site.com/busca?termo=php&pagina=2
```
- **Caminho:** `/busca` (página de busca).
- **Parâmetros:**
  - `termo=php` (busca pelo termo "php").
  - `pagina=2` (exibe a página 2 dos resultados).

#### Exemplo 3: URL sem parâmetros
```
http://site.com/sobre
```
- **Caminho:** `/sobre` (página "Sobre").
- **Parâmetros:** Nenhum.

---

### **Resumindo:**
- **`/`**: Separa caminhos no servidor (ex: `/produtos`, `/contato`).
- **`?`**: Inicia os parâmetros de consulta (ex: `?categoria=livros`).
- **`=`**: Atribui um valor a um parâmetro (ex: `categoria=livros`).
- **`&`**: Separa múltiplos parâmetros (ex: `?categoria=livros&ordenar=preco`).

---

### **Dica extra:**
- No **Laravel**, você pode usar rotas com parâmetros dinâmicos, como:
  ```php
  Route::get('/produtos/{id}', function ($id) {
      return "Produto ID: " . $id;
  });
  ```
  - Aqui, `{id}` é um parâmetro dinâmico na rota, e o valor é passado diretamente para a função.

---
## Exemplo prático v2
```
http://localhost:8000/url_estrutura?nome=samuel&idade=20&telefone=61994538514&hobbie=Programar
```

```php
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
```