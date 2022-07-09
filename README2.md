**7 - Criando controllers**

Os controllers são partes fundamentais da aplicação e geralmente ficam com a maior parte da lógica.
Tem o papel de enviar e esperar resposta do banco de dados e para as views. Podem ser criados via artisan.

Para criar um controller, abra um terminal e digite o comando:

php artisan make:controller NomeDoController

Para acessar o arquivo vá até o diretório */app/Http/Controllers/NomeDoController.php*

Dentro do controller é possível criar um método e inserir a lógica dentro do mesmo. Exemplo de método para uma view:

```
public function index()
    {
        $search = request("search");

        if($search){
            $events = Event::where([
                ["title", "like", "%" . $search . "%"]
            ])->get();
        } else {
        $events = Event::all();
        }
    
        return view('welcome', [
            'events' => $events,
            'search' => $search
        ]);
    }
```

Para criar uma rota e utilizar o controller:

em web.php:

```
use App\Http\Controllers\EventController; // importa o controller

Route::get('/', [EventController::class, "index"]); // cria a rota e informa qual o método a ser utilizado
```
