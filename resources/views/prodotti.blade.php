@extends('layouts.app')

@section('title', 'prodotti')

@section('content')

<h1>Our new collection!</h1>

<div class="dresses">
    @foreach ($vestiti as $vestito)
        <div class="card">
            <img src="{{$vestito['img']}}" alt="">
            <p>{{$vestito['tipo']}}</p>
            <p>Color: {{$vestito['colore']}}</p>
            <p>Price: {{$vestito['prezzo']}}$</p>
        </div>
    @endforeach
</div>

<a href="{{ route('homepage') }}">Turn back</a>
    
@endsection