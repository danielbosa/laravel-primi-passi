@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
    <h1>{{$user['name']}}</h1>
    <a href="/">Torna indietro</a>
</main>

@endsection
