@extends('layouts/main')

@section('title', 'Criar evento')

@section('content')

<div class="card card-body col-md-6 offset-md-3">
<h1>Crie o seu evento</h1>
    <form action="/events" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" name="title" id="title" class="form-control">
        </div>

        <div class="form-group">
            <label for="city">Cidade:</label>
            <input type="text" name="city" id="city" class="form-control">
        </div>

        <div class="form-group">
            <label for="description">Descrição:</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="private">Evento privado:</label>
            <select name="private" id="private" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>

        <input type="submit" value="Criar Evento" class="btn btn-primary">
    </form>
</div>
@endsection