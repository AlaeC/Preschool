@extends('view.layouts.app')

@section('title', 'Toutes les catégories - Kids Learning')

@section('content')
<div class="container py-5">
    <!-- En-tête -->
    <div class="text-center mb-5">
        <h1 class="display-4 fw-bold">Choisis une catégorie</h1>
        <p class="lead text-muted">Apprendre en s'amusant !</p>
    </div>

    <!-- Grille des catégories -->
    <div class="row g-4">
        @foreach($categories as $category)
        <div class="col-md-4 col-sm-6">
            <div class="card h-100 shadow-sm border-0 transition-all hover:shadow-lg">
                <img src="{{ asset('' . $category->icon) }}" 
                     class="card-img-top" 
                     alt="{{ $category->name }}"
                     style="height: 180px; object-fit: cover;">
                
                <div class="card-body text-center">
                    <h3 class="card-title">{{ $category->categorie_name }}</h3>
                    <a href="{{ route('learning.category', $category->categorie_id) }}" 
                       class="btn btn-primary btn-sm stretched-link">
                        Commencer →
                    </a>
                    
                    
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<style>
    .transition-all {
        transition: all 0.3s ease;
    }
    .hover\:shadow-lg:hover {
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }
</style>
@endsection