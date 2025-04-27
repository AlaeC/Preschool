<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apprentissage - {{ $category->name }}</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet">
    
    
    <link rel="stylesheet" href="{{ asset('css/CATEGORIE.css') }}">
    
    
</head>
<body>
    @include('view.partials.navbar') 
    
    <div class="container">
        <section class="alphabet-section">
            <h1 class="display-4 mb-5">{{ $category->categorie_name }}</h1>
            
            <div class="contenu-grid">
                @foreach($category->data as $item)
                <div class="block">
                    <img src="{{ asset( $item->image) }}" 
                         alt="{{ $item->item_name }}" 
                         class="img-fluid w-100">
                    <button class="audio-btn" 
                            onclick="document.getElementById('audio{{ $loop->index }}').play()">
                        🔊
                    </button>
                    <audio id="audio{{ $loop->index }}" 
                           src="{{ asset($item->audio) }}"></audio>
                    <div class="p-3 text-center bg-light">
                        <strong>{{ $item->item_name }}</strong>
                    </div>
                </div>
                @endforeach
            </div>
            
     
            <div class="video-section">
                <h2 class="mb-4">Vidéo explicative</h2>
                <div class="ratio ratio-16x9">
                    <video controls class="rounded shadow">
                        <source src="{{ asset($category->video) }}" 
                                type="video/mp4">
                 
                    </video>
                </div>
            </div>
      
        </section>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        
        document.querySelectorAll('.block').forEach(block => {
            block.addEventListener('mouseenter', function() {
                this.querySelector('audio').play();
            });
        });
    </script>
</body>
</html>

