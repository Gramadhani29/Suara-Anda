<div>
    <h1 class="mb-4">Manajemen Artikel</h1>

    @if (session()->has('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <form wire:submit.prevent="{{ $isEditMode ? 'update' : 'store' }}">
        <input type="text" wire:model="judul" placeholder="Judul Artikel" class="form-control mb-2">
        @error('judul') <span class="text-danger">{{ $message }}</span> @enderror

        <textarea wire:model="isi" placeholder="Isi Artikel" class="form-control mb-2"></textarea>
        @error('isi') <span class="text-danger">{{ $message }}</span> @enderror

        <button type="submit" class="btn btn-primary">
            {{ $isEditMode ? 'Update' : 'Tambah' }}
        </button>
        <button type="button" wire:click="resetFields" class="btn btn-secondary">Reset</button>
    </form>

    <hr>

    <h2>Daftar Artikel</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Isi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($artikels as $artikel)
                <tr>
                    <td>{{ $artikel->judul }}</td>
                    <td>{{ $artikel->isi }}</td>
                    <td>
                        <button wire:click="edit({{ $artikel->id }})" class="btn btn-warning">Edit</button>
                        <button wire:click="delete({{ $artikel->id }})" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $artikels->links() }}
</div>
