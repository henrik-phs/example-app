@extends('layouts/main')

@section('title', 'Home')

@section('content')
<h1>Conhecendo o blade</h1>

@if($nome)
<p>olá {{ @$nome }} {{ @$idade }}</p>
@endif

@for($i = 0; $i < count($arr); $i++) 
    <p>{{ $arr[$i] }}</p>
@endfor

    @foreach($nomes as $nome)
    {{$loop->index}} -
    {{$nome}} <br>
    @endforeach

    {{-- COMENTÁRIO COM LARAVEL --}}
    {{-- ESSE COMENTÁRIO NÃO APARECE NO CÓDIGO FONTE --}}
    @endsection