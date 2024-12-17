@extends('layouts.app') <!-- Izmanto lapas pamata izkārtojumu no layouts.app -->

@section('title', 'Kontakti') <!-- Iestata lapas nosaukumu -->

@section('content')
<div class="container mt-4"> <!-- Izveido konteineri ar klasi "mt-4" (margin-top: 4) -->
    <div class="row"> <!-- Izveido rindu -->
        <div class="col-md-4"> <!-- Izveido kolonnu ar 4 vienībām platuma (bootstrap grid sistēma) -->
            <h2>Kontakti</h2>
            <p><strong>Telefona numurs:</strong> +371 12345678</p>
            <p><strong>E-pasts:</strong> info@saldējumakafejnīca.lv</p>
        </div>
        <div class="col-md-4"> <!-- Izveido kolonnu ar 4 vienībām platuma (bootstrap grid sistēma) -->
            <h2>Sazinieties ar mums</h2>
            <form> <!-- Sazināšanās forma -->
                <div class="form-group"> <!-- Formas grupa -->
                    <label for="name">Vārds</label> <!-- Vārda ievades lauka nosaukums -->
                    <input type="text" class="form-control" id="name"> <!-- Ievades lauks ar form-control klasi -->
                </div>
                <div class="form-group"> <!-- Formas grupa -->
                    <label for="email">E-pasts</label> <!-- E-pasta ievades lauka nosaukums -->
                    <input type="email" class="form-control" id="email"> <!-- Ievades lauks ar form-control klasi -->
                </div>
                <div class="form-group"> <!-- Formas grupa -->
                    <label for="message">Jautājums</label> <!-- Jautājuma ievades lauka nosaukums -->
                    <textarea class="form-control" id="message" rows="3"></textarea> <!-- Teksta lauks ar form-control klasi -->
                </div>
                <button type="submit" class="btn btn-warning">Sūtīt</button> <!-- Sūtīšanas poga -->
            </form>
        </div>
        <div class="col-md-4"> <!-- Izveido kolonnu ar 4 vienībām platuma (bootstrap grid sistēma) -->
            <h2>Mūsu atrašanās vieta</h2>
            <p>Rīga, Latvija</p>
        </div>
    </div>
</div>
@endsection
