<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function index(Request $request)
    {
    // Tentukan jumlah artikel yang akan ditampilkan per halaman
        $perPage = 10;

    // Ambil semua artikel
    $artikels = Artikel::all();

    // Tentukan halaman saat ini (default halaman 1)
    $currentPage = $request->get('page', 1);

    // Hitung total artikel
    $total = $artikels->count();

    // Hitung jumlah halaman
    $lastPage = ceil($total / $perPage);

    // Ambil artikel yang sesuai dengan halaman dan jumlah per halaman
    $artikels = $artikels->forPage($currentPage, $perPage);

    // Kirimkan data ke view
    return view('artikels.index', compact('artikels', 'currentPage', 'lastPage', 'total', 'perPage'));

    }

    // Menampilkan form untuk membuat artikel
    public function create()
    {
        return view('admin.artikels.create');
    }

    // Menyimpan artikel baru
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required|string',
        ]);

        // Simpan artikel ke database
        Artikel::create([
            'judul' => $request->judul,
            'konten' => $request->konten,
            'user_id' => auth()->id(),  // Menyimpan user_id jika artikel terkait dengan pengguna yang login
        ]);

        // Redirect ke halaman daftar artikel dengan pesan sukses
        return redirect()->route('artikels.index')->with('success', 'Artikel berhasil disimpan.');
    }

    public function show($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('artikels.show', compact('artikel'));
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
        // Validasi input
        $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required|string',
        ]);

        // Temukan artikel berdasarkan ID
        $artikel = Artikel::findOrFail($id);

        // Perbarui artikel
        $artikel->update([
            'judul' => $request->judul,
            'konten' => $request->konten,
        ]);

        // Redirect ke halaman daftar artikel dengan pesan sukses
        return redirect()->route('artikels.index')->with('success', 'Artikel berhasil diperbarui.');
    }

    // Menghapus artikel
    public function destroy($id)
    {
        // Temukan artikel berdasarkan ID
        $artikel = Artikel::findOrFail($id);

        // Hapus artikel
        $artikel->delete();

        // Redirect ke halaman daftar artikel dengan pesan sukses
        return redirect()->route('artikels.index')->with('success', 'Artikel berhasil dihapus.');
    }
}
