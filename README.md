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
