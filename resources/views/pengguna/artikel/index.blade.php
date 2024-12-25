<!-- resources/views/user/artikels/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Artikel</h1>

    @if ($artikels->isEmpty())
        <p>Tidak ada artikel yang tersedia.</p>
    @else
        <ul class="list-group">
            @foreach ($artikels as $artikel)
                <li class="list-group-item">
                    <h3>{{ $artikel->judul }}</h3>
                    <p>{{ Str::limit($artikel->isi, 150) }}</p>
                    <a href="{{ route('artikels.show', $artikel->id) }}" class="btn btn-info">Lihat Artikel</a>
                </li>
            @endforeach
        </ul>
    @endif
</div>
@endsection
