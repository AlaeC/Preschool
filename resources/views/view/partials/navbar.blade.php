<div class="navbar navbar-expand-lg navbar-light" style="background: linear-gradient(90deg, #89CFF0, #4a6baf); box-shadow: 0 4px 6px rgba(0,0,0,0.1); padding: 1rem;">
    <div class="container d-flex justify-content-between align-items-center">
        <!-- Left: Logo -->
        <a class="navbar-brand fw-bold text-white" href="{{ url('/') }}">Kids Learning</a>

        <!-- Center: Start Game Button -->
        <div class="text-center">
            <a href="{{ route('learning.game') }}" class="btn btn-warning fw-bold shadow-sm">🎮 Start Game</a>
        </div>

        <!-- Right: Navigation Links -->
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link text-white fw-bold" href="{{ route('learning') }}">Learning</a>
            </li>
        </ul>
    </div>
</div>