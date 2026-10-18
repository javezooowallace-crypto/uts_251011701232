@extends('layouts.app')

@section('title', 'Beranda - Portal Resep Masakan')

@section('content')
    <section class="hero text-white text-center py-5">
        <div class="container py-4">
            <h1 class="display-4 fw-bold">Portal Resep Masakan</h1>
            <p class="lead mb-4">Kumpulan resep masakan Nusantara lengkap dengan bahan dan langkah memasaknya.</p>
            <a href="{{ route('recipes.index') }}" class="btn btn-light btn-lg">Lihat Semua Resep</a>
        </div>
    </section>

    <section class="container my-5">
        <h2 class="h3 mb-4 text-center">Resep Pilihan</h2>
        <div class="row g-4">
            @foreach ($featured as $recipe)
                <div class="col-12 col-md-6 col-lg-4">
                    @include('recipes._card', ['recipe' => $recipe])
                </div>
            @endforeach
        </div>
    </section>
@endsection
