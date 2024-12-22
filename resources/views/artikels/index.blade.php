<!-- resources/views/artikels/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Artikel</h1>
        
        @can('create', App\Models\Artikel::class)
            <a href="{{ route('artikels.create') }}" class="btn btn-primary">Tambah Artikel</a>
        @endcan
        
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Konten</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($artikels as $artikel)
                    <tr>
                        <td>{{ $artikel->judul }}</td>
                        <td>{{ Str::limit($artikel->konten, 100) }}</td>
                        <td>
                            <a href="{{ route('artikels.show', $artikel->id) }}" class="btn btn-info">Lihat</a>
                            
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
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
