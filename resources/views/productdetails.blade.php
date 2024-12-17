@extends('layouts.app')

@section('title', $product->name)

@section('content')
<div class="container"> <!-- Izveido konteineri -->
    <div class="row"> <!-- Izveido rindu -->
        <div class="col-md-6"> <!-- Izveido kolonnu ar 6 vienībām platuma (bootstrap grid sistēma) -->
            <img src="{{ asset($product->details->ImageURL) }}" alt="{{ $product->name }}" class="product-image"> <!-- Attēls ar produktu attēlu -->
        </div>
        <div class="col-md-6"> <!-- Izveido kolonnu ar 6 vienībām platuma (bootstrap grid sistēma) -->
            <h1>{{ $product->Name }}</h1>
            <p><strong>Cena:</strong> {{ $product->Price }} €</p> <!-- Produkta cena -->
            <p><strong>Apraksts:</strong> {{ $product->Description }}</p> <!-- Produkta apraksts -->
            <p><strong>Daudzums:</strong> {{ $product->Quantity }}</p> <!-- Produkta daudzums -->
            <a href="{{ route('products') }}" class="btn btn-warning">Atpakaļ uz produktiem</a> <!-- Poga "Atpakaļ uz produktiem" -->
        </div>
    </div>
</div>
@endsection

