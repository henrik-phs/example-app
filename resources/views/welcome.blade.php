@extends('layouts/main')

@section('title', 'Dashboard')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="banner">
                    <img src="/img/banner1.png" alt="" width="100%">
                </div>
            </div>
        </div>

        <br>
        <div class="card card-body">
            <div class="row">
                <div class="col-md-12" id="search-container">
                    <h1>Buscar um evento</h1>
                    <form action="/" method="GET">
                        <input type="text" name="search" id="search" class="form-control" placeholder="Busque um evento">
                    </form>
                </div>
            </div>
        </div>

        <br>
        <div class="row">
            <div class="col-md-12" id="cards-events">
                @if (count($events) > 0)
                    @if ($search)
                        <h2>Buscando por: {{ $search }} </h2>
                    @else
                        <h2>Próximos eventos</h2>
                    @endif

                    <p>Veja os eventos dos próximos dias</p>

                    <div class="row" id="cards-container">
                        @foreach ($events as $event)
                            <div class="col-md-3">
                                <div class="card" style="margin-bottom: 20px;">
                                    <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}" width="100%"
                                        style="border-radius: 4px 4px 0 0;">

                                    <div class="card-body">
                                        <span class="card-date">{{ date('d/m/Y', strtotime($event->date)) }}</span>
                                        <h3 class="card-title">{{ $event->title }}</h3>
                                        <p class="card-participants">{{count($event->users)}} participantes</p>
                                        <a href="events/{{ $event->id }}">Saiba mais</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @elseif(count($events) == 0 && $search)
                    <p>Não foi possível encontrar nenhum evento com: {{ $search }}. <a href="/">Ver todos</a> </p>
                @else
                    <p>Não há eventos disponíveis</p>
                @endif
            </div>
        </div>

    </div>
@endsection
