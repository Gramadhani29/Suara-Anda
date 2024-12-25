<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function __construct()
    {
        // Pastikan middleware hanya diterapkan di controller yang memerlukan
        $this->middleware('RoleMiddleware'); // Pastikan pengguna sudah login
        $this->middleware('Admin')->only(['adminIndex', 'create', 'store', 'edit', 'update', 'destroy']); // Admin hanya yang bisa mengakses artikel
    }

    // Menampilkan daftar artikel untuk admin
    public function adminIndex()
    {
        $artikels = Artikel::all(); // Ambil semua artikel
        return view('admin.artikels.index', compact('artikels'));
    }

    // Menampilkan form untuk membuat artikel
    public function create()
    {
        return view('admin.artikels.create');
    }

    // Menyimpan artikel baru
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
        ]);

        Artikel::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
        ]);

        return redirect()->route('artikels.admin')->with('success', 'Artikel berhasil dibuat!');
    }

    // Menampilkan form untuk mengedit artikel
    public function edit($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('admin.artikels.edit', compact('artikel'));
    }

    // Mengupdate artikel
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
        ]);

        $artikel = Artikel::findOrFail($id);
        $artikel->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
        ]);

        return redirect()->route('artikels.admin')->with('success', 'Artikel berhasil diperbarui!');
    }

    // Menghapus artikel
    public function destroy($id)
    {
        $artikel = Artikel::findOrFail($id);
        $artikel->delete();

        return redirect()->route('artikels.admin')->with('success', 'Artikel berhasil dihapus!');
    }
}
