@extends('layouts/main')

@section('title', 'Criar evento')

@section('content')

    <div class="container event-create-container">
        <div class="card card-body">
            <h1>Crie o seu evento</h1>
            <form action="/events" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Evento:</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>

                <div class="form-group">
                    <label for="date">Data do evento:</label>
                    <input type="date" name="date" id="date" class="form-control">
                </div>

                <div class="form-group">
                    <label for="city">Cidade:</label>
                    <input type="text" name="city" id="city" class="form-control">
                </div>

                <div class="form-group">
                    <label for="private">O evento é privado?</label>
                    <select name="private" id="private" class="form-control">
                        <option value="0">Não</option>
                        <option value="1">Sim</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="image">Imagem do evento:</label>
                    <input type="file" name="image" id="image" class="form-control">
                </div>

                <div class="form-group">
                    <label for="description">Descrição:</label>
                    <textarea name="description" id="description" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label>Adicione itens de infraestrutura:</label>

                    <div class="form-group">
                        <input type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
                    </div>

                    <div class="form-group">
                        <input type="checkbox" name="items[]" value="Brindes"> Brindes
                    </div>

                    <div class="form-group">
                        <input type="checkbox" name="items[]" value="Palco"> Palco
                    </div>

                    <div class="form-group">
                        <input type="checkbox" name="items[]" value="Open Food"> Open Food
                    </div>

                    <div class="form-group">
                        <input type="checkbox" name="items[]" value="Cerveja Grátis"> Cerveja Grátis
                    </div>
                </div>

                <input type="submit" value="Criar Evento" class="btn btn-primary">
            </form>
        </div>
    </div>
@endsection
