<!-- resources/views/artikels/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tambah Artikel</h1>

        <form action="{{ route('artikels.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" name="judul" id="judul" class="form-control" required>
            </div>

            <div class="form-group mt-3">
                <label for="konten">Konten</label>
                <textarea name="konten" id="konten" rows="5" class="form-control" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
        </form>
    </div>
@endsection
