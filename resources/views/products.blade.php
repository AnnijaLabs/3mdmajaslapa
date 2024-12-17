@extends('layouts.app')

@section('title', 'Mūsu Produkti')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($products as $product) <!-- Sākas foreach cikls, lai parādītu katru produktu -->
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4"> <!-- Izveido kolonnu ar attiecīgajām platuma klātbūtnēm (bootstrap grid sistēma) -->
                <div class="card"> <!-- Izveido kārti -->
                    <a href="{{ route('productdetails', $product->ProductID) }}"> <!-- Izveido saiti, kas ved uz sīkāku informāciju par produktu, padodot produkta ID -->
                        <img class="card-img-top" src="{{ asset($product->details->ImageURL) }}" alt="{{ $product->Name }}"> <!-- Attēls ar produktu attēlu -->
                        <div class="card-body"> <!-- Kārtiņas saturs -->
                            <h5 class="card-title">{{ $product->Name }}</h5> <!-- Produkta nosaukums -->
                            <p class="card-text">{{ $product->Price }} €</p> <!-- Produkta cena -->
                        </div>
                    </a>
                </div>
            </div>
            @endforeach <!-- Beidzas foreach cikls -->
        </div>
    </div>
@endsection
