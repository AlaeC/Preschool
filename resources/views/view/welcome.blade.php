<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kids Learning</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    
    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    
    <style>
        /* Styles personnalisés */
        .navbar-container {
    background: linear-gradient(90deg, #6fb1fc, #4a6baf); /* Soft blue gradient */
    padding: 1rem;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    position: sticky;
    top: 0;
    z-index: 1000;
}
.nav-link {
    color: white !important;
    font-weight: 600;
    transition: color 0.3s, background-color 0.3s;
}
.nav-link:hover {
    color: #ffe066 !important; /* Nice yellow hover */
    background-color: rgba(255,255,255,0.1);
    border-radius: 10px;
}

/* Buttons */
.btn {
    border-radius: 20px;
}

/* Active link */
.nav-link.active {
    background-color: rgba(255,255,255,0.2);
    border-radius: 10px;
}
        .text-style {
            color: white;
            font-family: 'Figtree', sans-serif;
        }
        .div-of-text {
            color: #2c3e50;
        }
        .animated-alphabet {
            animation: float 3s ease-in-out infinite;
        }
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }
        .progress-tracker {
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
        }
        .milestone {
            display: inline-block;
            margin: 0 10px;
            padding: 5px 10px;
            background-color: #e9ecef;
            border-radius: 20px;
        }
        .milestone.current {
            background-color: #4a6baf;
            color: white;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <div class="d-flex flex-wrap align-items-center justify-content-between">
    <div class="d-flex align-items-center">
        <a href="{{ url('/') }}">
            <img src="{{ asset('assets/images/logoschool-removebg-preview.png') }}" class="logo-image me-3" alt="Logo" width="50">
        </a>
    </div>

    <ul class="nav justify-content-center">
        <li class="nav-item"><a href="{{ url('/') }}" class="nav-link active text-white">Home</a></li>
        <li class="nav-item"><a href="{{ route('learning') }}" class="nav-link text-white">Learning</a></li>
        <li class="nav-item"><a href="{{route('princing')}}" class="nav-link text-white">Pricing</a></li>
    </ul>

    <div class="text-end">
        <a href="{{ route('login') }}" class="btn btn-light me-2 ">Login</a>
        <a href="{{ route('signup') }}" class="btn btn-dark ">Sign-up</a>
    </div>
</div>


    <!-- Hero Section -->
    <div class="container">
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 shadow-lg">
            <div class="col-lg-7 p-3 p-lg-5 pt-lg-3 div-of-text">
                <h2 class="display-4 fw-bold lh-1 text-style">The best way to learn or practice is through fun!</h2>
                <h4>.Playful & Motivational</h4>
                <h5>📚ABCs, 123s, and more all with giggles and fun!</h5>
                <h4>.Simple & Direct</h4>
                <h5>🖍️Color, play, and discover all while learning!</h5>
                <h4>.Gamification Hook</h4>
                <h5>🏆Learn faster, and become a learning superhero!</h5>
                
                <div class="progress-tracker mt-4 p-3 rounded">
                    <h3 class="text-dark">🚀 See Your Learning Journey!</h3>
                    <div class="progress-map">
                        <div class="milestone"><h5 class="milestone-text">⭐Alphabet Master</h5></div>
                        <div class="milestone current"><h5 class="milestone-text">🔢Counting to 100</h5></div>
                        <div class="milestone"><h5 class="milestone-text">🌈Color Mixer</h5></div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg align-self-start">
                <img class="rounded-lg-3 animated-alphabet" src="{{ asset('assets/images/alphabet.png') }}" width="390" height="500" alt="Alphabet Image">
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
