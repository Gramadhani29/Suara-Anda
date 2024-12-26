<!-- resources/views/admin/artikels/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Artikel (Admin)</h1>

    <a href="{{ route('artikels.create') }}" class="btn btn-success mb-3">Buat Artikel Baru</a>

    @if ($artikels->isEmpty())
        <p>Tidak ada artikel yang tersedia.</p>
    @else
        <ul class="list-group">
            @foreach ($artikels as $artikel)
                <li class="list-group-item">
                    <h3>{{ $artikel->judul }}</h3>
                    <p>{{ Str::limit($artikel->isi, 150) }}</p>
                    <a href="{{ route('artikels.show', $artikel->id) }}" class="btn btn-info">Lihat</a>
                    <a href="{{ route('artikels.edit', $artikel->id) }}" class="btn btn-warning">Edit</a>
                    
                    <!-- Form untuk menghapus artikel -->
                    <form action="{{ route('artikels.destroy', $artikel->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @endif
</div>
@endsection
