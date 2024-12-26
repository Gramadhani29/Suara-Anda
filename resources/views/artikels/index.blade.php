@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Daftar Artikel</h1>
        
        <a href="{{ route('artikels.create') }}" class="btn btn-primary mb-3">Tambah Artikel</a>
        
        <div class="row">
            @foreach ($artikels as $artikel)
                <div class="col-md-4 mb-3">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">{{ $artikel->judul }}</h5>
                            <p class="card-text">{{ Str::limit($artikel->konten, 100) }}</p>
                            <a href="{{ route('artikels.show', $artikel->id) }}" class="btn btn-info btn-sm">Lihat</a>
                            
                            @can('update', $artikel)
                                <a href="{{ route('artikels.edit', $artikel->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            @endcan
                            
                            @can('delete', $artikel)
                                <form action="{{ route('artikels.destroy', $artikel->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus artikel ini?')">Hapus</button>
                                </form>
                            @endcan
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="mt-4">
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                    <!-- Previous Button -->
                    @if ($currentPage > 1)
                        <li class="page-item">
                            <a class="page-link" href="{{ route('artikels.index', ['page' => $currentPage - 1]) }}" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                    @else
                        <li class="page-item disabled">
                            <span class="page-link">&laquo;</span>
                        </li>
                    @endif

                    <!-- Page Numbers -->
                    @for ($i = 1; $i <= $lastPage; $i++)
                        <li class="page-item {{ $currentPage == $i ? 'active' : '' }}">
                            <a class="page-link" href="{{ route('artikels.index', ['page' => $i]) }}">{{ $i }}</a>
                        </li>
                    @endfor

                    <!-- Next Button -->
                    @if ($currentPage < $lastPage)
                        <li class="page-item">
                            <a class="page-link" href="{{ route('artikels.index', ['page' => $currentPage + 1]) }}" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    @else
                        <li class="page-item disabled">
                            <span class="page-link">&raquo;</span>
                        </li>
                    @endif
                </ul>
            </nav>
        </div>
    </div>
@endsection
