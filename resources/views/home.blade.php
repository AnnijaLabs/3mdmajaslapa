@extends('layouts.app')

@section('title', 'Sākumlapa')

@section('content')
    <div class="content">
        <img src="{{ asset('images/green_tea.png') }}" alt="Saldējums grozā" class="image">
        <div class="text">
            <h1>Garša, kuru gribas atcerēties!</h1>
            <p>Saldējuma kafejnīca ir atvērta brīvdienās no 12.00 - 20.00</p>
            <p>Kafejnīca ir radīta, lai izbaudītu un nogaršotu klasiskas un jaunas garšas, kuru izveidoja studente, lai piepildītu savu sapni par kafejnīcas izveidi ar lietām, kas pašai garšo. Katrs piedāvātais ēdiens un dzēriens šeit ir rūpīgi atlasīts un sagatavots, lai nodrošinātu autentisku un atmiņā paliekošu garšu pieredzi. Kafejnīca lepojas ar siltu un aicinošu atmosfēru, kas aicina apmeklētājus atgriezties atkal un atkal. Šeit, ikviens var atrast kaut ko savai gaumei - sākot no mājīgas tējas līdz pat ekskluzīvām konditorejas izstrādājumu piedāvājumiem. Mēs esam pārliecināti, ka mūsu aizrautība un mīlestība pret labu ēdienu atspoguļojas katrā šķīvī, ko pasniedzam.</p>
        </div>
    </div>

    <section class="call-to-action"> <!-- Sākas izsaukuma sekcija -->
        <h2>Piedāvājumi</h2>
        <div class="product-gallery"> <!-- Produktu galerija -->
            @foreach ($categories as $category) <!-- Sākas foreach cikls, lai parādītu katru kategoriju -->
            <div class="product-item"> <!-- Sākas produktu vienība -->
                <img src="{{ asset($category->CatImageURL) }}" alt="{{ $category->Name }}"> <!-- Attēls ar kategorijas attēlu -->
                <h2>{{ $category->Name }}</h2> <!-- Kategorijas nosaukums -->
            </div> <!-- Beidzas produktu vienība -->
            @endforeach
        </div>
    </section>

@endsection
