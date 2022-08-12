@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<h1>Teste</h1>

<img src="/img/banner.jpg" alt="Banner">

<p>O nome é {{ $nome }} e a profissão é {{ $profissao }}.</p>

<p>
    @if($idade >= 18)
        É maior de idade.
    @else
        É menor de idade.
    @endif
</p>

@endsection