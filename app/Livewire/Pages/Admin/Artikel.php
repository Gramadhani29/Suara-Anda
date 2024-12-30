<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Artikel;
use Livewire\WithPagination;

class ArtikelCrud extends Component
{
    use WithPagination;

    public $judul, $isi, $artikelId;
    public $isEditMode = false;

    protected $rules = [
        'judul' => 'required|string|max:255',
        'isi' => 'required',
    ];

    public function render()
    {
        $artikels = Artikel::paginate(5);
        return view('livewire.admin.artikel-crud', compact('artikels'))
            ->layout('layouts.app');
    }

    public function resetFields()
    {
        $this->judul = '';
        $this->isi = '';
        $this->artikelId = null;
        $this->isEditMode = false;
    }

    public function store()
    {
        $this->validate();
        Artikel::create([
            'judul' => $this->judul,
            'isi' => $this->isi,
        ]);

        session()->flash('message', 'Artikel berhasil ditambahkan.');
        $this->resetFields();
    }

    public function edit($id)
    {
        $artikel = Artikel::findOrFail($id);
        $this->artikelId = $artikel->id;
        $this->judul = $artikel->judul;
        $this->isi = $artikel->isi;
        $this->isEditMode = true;
    }

    public function update()
    {
        $this->validate();
        $artikel = Artikel::findOrFail($this->artikelId);
        $artikel->update([
            'judul' => $this->judul,
            'isi' => $this->isi,
        ]);

        session()->flash('message', 'Artikel berhasil diperbarui.');
        $this->resetFields();
    }

    public function delete($id)
    {
        Artikel::findOrFail($id)->delete();
        session()->flash('message', 'Artikel berhasil dihapus.');
    }
}
