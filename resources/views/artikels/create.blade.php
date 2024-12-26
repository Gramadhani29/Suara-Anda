@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tambah Artikel</h1>

        <form action="{{ route('artikels.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" name="judul" id="judul" class="form-control" value="{{ old('judul') }}" required>
                @error('judul')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group mt-3">
                <label for="konten">Konten</label>
                <textarea name="konten" id="konten" rows="5" class="form-control" required>{{ old('konten') }}</textarea>
                @error('konten')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
        </form>
    </div>
@endsection
