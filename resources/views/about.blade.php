@extends('layouts.app')

@section('title', 'Par Mums')

@section('content')
    <div class="container mt-4">
        <h1>Par Mums</h1>
        <div class="row">
            <!-- Vadītājas sadaļa -->
            <div class="col-md-2">
                <img src="{{ asset('images/manager.png') }}" alt="Vadītājas attēls" class="img-fluid rounded-circle">
            </div>
            <div class="col-md-8">
                <h2>Mūsu vadītāja</h2>
                <p>
                    <strong>Annija Lapsa</strong>, mūsu kafejnīcas dibinātāja un vadītāja,
                    ir apņēmusies radīt neaizmirstamu pieredzi katram viesim. Annija,
                    ar vairāk nekā 8 gadu pieredzi viesmīlības nozarē, ir iedvesmojusies
                    no ceļojumiem pa Eiropu un savas aizraušanās ar augstas kvalitātes pārtiku.
                </p>
                <p>
                    Zem Annijas vadības mūsu kafejnīca ir kļuvusi par vienu no populārākajiem
                    vietējās kopienas saldējuma galamērķiem, piedāvājot daudzveidīgu ēdienu
                    izvēli un izsmalcinātu klientu apkalpošanu.
                </p>
            </div>
        </div>
        <div class="highlight">
            <p>
                Mūsu uzņēmums piedāvā augstākās kvalitātes saldējumu kopš 2016. gada.
                Mēs esam apņēmušies nodrošināt tikai labākos produktus un klientu apkalpošanu.
                Mūsu mērķis ir sagādāt neaizmirstamu pieredzi katram klientam, kurš izvēlas mūsu produktus.
            </p>
            <p>
                Mēs atrodamies Rīgā, bet mūsu saldējumu var atrast daudzās pārdošanas vietās visā Latvijā.
                Pievienojieties mūsu stāstam un izbaudiet garšu, kas paliek atmiņā.
            </p>
        </div>
    </div>
@endsection
