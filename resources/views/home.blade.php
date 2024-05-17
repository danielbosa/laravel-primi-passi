@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
    <h1>Hello World</h1>
    <h2>{{$user['name']}}</h2>
    <a href="/contatti">Clicca qui</a>
</main>

@endsection
