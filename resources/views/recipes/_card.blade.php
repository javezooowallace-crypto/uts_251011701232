<div class="card h-100 recipe-card border-0 shadow-sm">
    <img src="{{ asset('assets/images/' . $recipe->image) }}" class="card-img-top" alt="{{ $recipe->name }}">
    <div class="card-body d-flex flex-column">
        <span class="badge text-bg-warning align-self-start mb-2">{{ $recipe->category }}</span>
        <h5 class="card-title">{{ $recipe->name }}</h5>
        <p class="card-text text-muted mb-3">⏱ {{ $recipe->cook_time }} menit</p>
        <a href="{{ route('recipes.show', $recipe) }}" class="btn btn-danger mt-auto">Lihat Resep</a>
    </div>
</div>
