<!DOCTYPE html>
<html lang="lv"> <!-- Norāda valodu -->
<head>
    <meta charset="UTF-8"> <!-- Uzstāda teksta kodējumu uz UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Uzstāda skatītāju, lai pielāgotu ekrānu izmēru un skalēšanu -->
    <title>@yield('title', 'Saldejuma Kafejnīca')</title> <!-- Nosaka lapas nosaukumu, pēc noklusējuma ir "Saldejuma Kafejnīca" -->
    <link href="{{ asset('style.css') }}" rel="stylesheet"> <!-- Ielādē vietējo CSS stilu failu -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"> <!-- Ielādē Font Awesome ikonu bibliotēku -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"> <!-- Ielādē Bootstrap CSS bibliotēku -->
</head>
<body>
@include('components.header') <!-- Iekļauj lapas galvenes komponentu -->

<main>
    @yield('content') <!-- Iekļauj lapas satura daļu -->
</main>

@include('components.footer') <!-- Iekļauj lapas kājas komponentu -->
</body>
</html>
