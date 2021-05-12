@extends('layouts.app')

@section('title', 'home')

@section('content')

<div class="welcome">
    <h1>Welcome to our homepage!</h1>
    <a href="{{ route('products') }}">Check out our new products :)</a>
</div>
    
@endsection