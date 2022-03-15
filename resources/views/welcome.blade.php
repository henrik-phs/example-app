@extends('layouts/main')

@section('title', 'Home')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="banner">
                <img src="/img/banner1.png" alt="" width="100%">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12" id="search-container">
            <h1>Buscar um evento</h1>
            <form action="#">
                <input type="text" name="search" id="search" class="form-control" placeholder="Busque um evento">
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12" id="cards-events">
            <h2>Próximos eventos</h2>
            <p>Veja os eventos dos próximos dias</p>

            <div class="row" id="cards-container">
                @foreach($events as $event)
                <div class="col-md-3">
                    <div class="card">
                        <img src="/img/evento2.jpg" alt="" width="100%">

                        <div class="card-body">
                            <span class="card-date">{{ date("d/m/Y") }}</span>
                            <h3 class="card-title">{{ $event->title }}</h3>
                            <p class="card-participants">X participantes</p>
                            <a href="#">Saber mais</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

</div>
@endsection