@extends('layouts.app')

@section('title', $recipe->name . ' - Portal Resep Masakan')

@section('content')
    <div class="container my-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                <li class="breadcrumb-item"><a href="{{ route('recipes.index') }}">Daftar Resep</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $recipe->name }}</li>
            </ol>
        </nav>

        <div class="card border-0 shadow-sm">
            <div class="row g-0">
                <div class="col-md-5">
                    <img src="{{ asset('assets/images/' . $recipe->image) }}"
                         class="img-fluid rounded-start w-100 h-100" style="object-fit:cover;" alt="{{ $recipe->name }}">
                </div>
                <div class="col-md-7">
                    <div class="card-body p-4">
                        <span class="badge text-bg-warning mb-2">{{ $recipe->category }}</span>
                        <h1 class="h2">{{ $recipe->name }}</h1>
                        <p class="text-muted">⏱ Waktu memasak: {{ $recipe->cook_time }} menit</p>

                        <h2 class="h5 mt-4">Bahan-bahan</h2>
                        <ul class="list-group list-group-flush mb-3">
                            @foreach ($recipe->ingredient_list as $item)
                                <li class="list-group-item bg-transparent px-0">{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="card border-0 shadow-sm mt-4">
            <div class="card-body p-4">
                <h2 class="h5">Langkah Memasak</h2>
                <ol class="mb-0">
                    @foreach ($recipe->step_list as $step)
                        <li class="mb-2">{{ $step }}</li>
                    @endforeach
                </ol>
            </div>
        </div>

        <a href="{{ route('recipes.index') }}" class="btn btn-secondary mt-4">&larr; Kembali ke Daftar</a>
    </div>
@endsection
