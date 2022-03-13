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
