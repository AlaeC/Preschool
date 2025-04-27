<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Kids Learning')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Ton style personnalisé -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
        /* Animation, hover, etc. */
        .transition-all {
            transition: all 0.3s ease;
        }
        .hover\:shadow-lg:hover {
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
    </style>
</head>

<body>

    @include('view.partials.navbar') <!-- Navbar réutilisable -->

    <div class="container mt-4">
        @yield('content') <!-- Là où le contenu spécifique des pages s'affiche -->
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
