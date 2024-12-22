<!-- resources/views/artikels/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $artikel->judul }}</h1>
        <p><strong>Konten:</strong></p>
        <p>{{ $artikel->konten }}</p>

        <a href="{{ route('artikels.index') }}" class="btn btn-secondary">Kembali</a>

        @can('update', $artikel)
            <a href="{{ route('artikels.edit', $artikel->id) }}" class="btn btn-warning">Edit</a>
        @endcan

        @can('delete', $artikel)
            <form action="{{ route('artikels.destroy', $artikel->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus artikel ini?')">Hapus</button>
            </form>
        @endcan
    </div>
@endsection
