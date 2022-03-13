@extends('layouts/main')

@section('title', 'Home')

@section('content')
<h1>Olá</h1>
@foreach($events as $event)
<p>{{ $event->title }} -- {{ $event->description }}</p>
@endforeach
@endsection