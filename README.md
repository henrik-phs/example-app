## Meu primeiro projeto em Laravel

Projeto desenvolvido seguindo o curso de Laravel do Matheus Battisti - Hora de Codar. Link do curso: https://www.youtube.com/playlist?list=PLnDvRpP8BnewYKI1n2chQrrR4EYiJKbUG

Requisitos: 
- Xampp;
- Composer;
- Laravel

**1 - Iniciando o Projeto:**

    composer create-project --prefer-dist  laravel/laravel  laravel-app
    cd  laravel-app
    php artisan  serve

**2 - Rotas e views** 

As **rotas** do projeto são configuradas no arquivo /routes/web.php. Podem ser configuradas das seguintes formas:

    Route::get('/produtos', function(){
       $busca = request('search');
       return  view('produtos', ['busca' => $busca]);
    });
ou: 

    use App\Http\Controllers\EventController;
    Route::get('/', [EventController::class, "index"]);
As **views** ficam na pasta /resources/views

**3 - Blade**

Blade é a template engine do Laravel. Com ele é possível deixar as views dinâmicas inserindo código HTML e dados vindos do banco de dados.
Exemplos:

    {{-- Laço condicional --}}
    @if(10 > 5)
       <p>A condição é true</p>
    @endif

    {{-- Exibir variável na tela--}}
    <p>{{ $nome }}</p>

    {{-- Laço de repetição --}}
    @for($i = 0; $i < 10; $i++)
       <p>Posição: {{ $i }}
    @endfor
    
    {{-- Código PHP --}}
    @php
       $nome = "Pedro"
       echo $nome;
    @endphp

**4 - Arquivos estáticos**

Arquivos como CSS, JS, imagens ficam na pasta /public.

    <link rel="stylesheet" href="/css/style.css">

**5 - Criando layouts com Blade

Com a criação de layouts é possível reaproveitar códigos, além de deixar o código mais limpo e dinâmico.
Para criar um layout, dentro da pasta */resources/views/* crie uma pasta *layout/* e dentro dessa pasta crie um arquivo *main.blade.php*

No arquivo *main.blade.php* coloque o código base do layout:

```
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
 <title>@yield('title') </title> <!-- LINHA PARA TÍTULO DINÂMICO -->
</head>

<body>    
       @yield('content') <!-- LINHA PARA INSERIR O CONTEÚDO -->
</body>

</html>
```

Depois de criado o layout principal, para utilizá-lo, basta inserir as seguintes linhas na view:

```
@extends('layouts/main') <!-- CHAMA O ARQUIVO main.blade.php -->

@section('title', 'Dashboard') <!-- LINHA PARA INFORMAR QUAL O TÍTULO DA PÁGINA -->

@section('content')
    <!-- AQUI DENTRO VEM O CONTEÚDO -->
@endsection
```

**5 - Resgatando parâmetros de URL

Com o Laravel é possível também pegar parâmetros de URL de 3 formas:
-parâmetros obrigátorios desta maneira: {id}
-parâmetros opcionais desta maneira: {id?}
-query parameters: ?nome=Pedro&idade=25

Para definir as rotas com parâmetro no arquivo /routes/web.php:
```
// PARÂMETROS OBRIGATÓRIOS
Route::get('/produtos', function(){
    return view('produtos');
});

// PARÂMETROS OPCIONAIS
Route::get('/produto/{id?}', function($id = null){
    return view('produto', ['id' => $id]);
});

// QUERY PARAMETERS
Route::get('/produtos', function(){
    $busca = request('search');

    return view('produtos', ['busca' => $busca]);
});
```
