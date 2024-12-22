<!-- resources/views/artikels/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Artikel</h1>

        <form action="{{ route('artikels.update', $artikel->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" name="judul" id="judul" class="form-control" value="{{ $artikel->judul }}" required>
            </div>

            <div class="form-group mt-3">
                <label for="konten">Konten</label>
                <textarea name="konten" id="konten" rows="5" class="form-control" required>{{ $artikel->konten }}</textarea>
            </div>

            <button type="submit" class="btn btn-warning mt-3">Update</button>
        </form>
    </div>
@endsection
