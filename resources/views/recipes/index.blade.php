@extends('layouts.app')

@section('title', 'Daftar Resep - Portal Resep Masakan')

@section('content')
<div class="container my-4">
    <h1 class="h3 mb-3">Daftar Resep</h1>

    <form action="{{ route('recipes.index') }}" method="GET" class="row g-2 mb-3">
        @if ($category)
        <input type="hidden" name="category" value="{{ $category }}">
        @endif

        <div class="col-12 col-md-6 col-lg-4">
            <input type="text" name="search" value="{{ $search }}" class="form-control"
                placeholder="Cari nama resep...">
        </div>

        <div class="col-auto">
            <button type="submit" class="btn btn-danger">Cari</button>
            @if ($search)
            <a href="{{ route('recipes.index', array_filter(['category' => $category])) }}"
                class="btn btn-outline-secondary">Reset</a>
            @endif
        </div>
    </form>

    <div class="mb-4 d-flex flex-wrap gap-2">
        <a href="{{ route('recipes.index', array_filter(['search' => $search])) }}"
            class="btn btn-sm {{ $category ? 'btn-outline-danger' : 'btn-danger' }}">Semua</a>

        @foreach ($categories as $cat)
        <a href="{{ route('recipes.index', array_filter(['category' => $cat, 'search' => $search])) }}"
            class="btn btn-sm {{ $category === $cat ? 'btn-danger' : 'btn-outline-danger' }}">{{ $cat }}</a>
        @endforeach
    </div>

    <div class="row g-4">
        @forelse ($recipes as $recipe)
        <div class="col-12 col-sm-6 col-lg-3">
            @include('recipes._card', ['recipe' => $recipe])
        </div>
        @empty
        <div class="col-12">
            <div class="alert alert-warning">Resep tidak ditemukan.</div>
        </div>
        @endforelse
    </div>

    {{-- Pagination --}}
    <div class="d-flex justify-content-center mt-4">
        {{ $recipes->links() }}
    </div>
</div>
@endsection