<?php
<<<<<<< Updated upstream
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
<<<<<<< Updated upstream
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
=======
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

>>>>>>> Stashed changes
    }

    // Menampilkan form untuk membuat artikel
    public function create()
    {
        return view('admin.artikels.create');
    }

    // Menyimpan artikel baru
    public function store(Request $request)
    {
<<<<<<< Updated upstream
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
        ]);

        Artikel::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
        ]);

        return redirect()->route('artikels.admin')->with('success', 'Artikel berhasil dibuat!');
=======
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
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
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
=======
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
>>>>>>> Stashed changes
    }

    // Menghapus artikel
    public function destroy($id)
    {
<<<<<<< Updated upstream
        $artikel = Artikel::findOrFail($id);
        $artikel->delete();

        return redirect()->route('artikels.admin')->with('success', 'Artikel berhasil dihapus!');
=======
        // Temukan artikel berdasarkan ID
        $artikel = Artikel::findOrFail($id);

        // Hapus artikel
        $artikel->delete();

        // Redirect ke halaman daftar artikel dengan pesan sukses
        return redirect()->route('artikels.index')->with('success', 'Artikel berhasil dihapus.');
>>>>>>> Stashed changes
=======

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArtikelController extends Controller
{
    // Middleware untuk membatasi akses
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:admin')->except(['index', 'show']);
    }

    // 📌 Menampilkan semua artikel (Read - Admin & User)
    public function index()
    {
        $artikels = Artikel::all();
        return view('artikel.index', compact('artikels'));
    }

    // 📌 Menampilkan detail artikel (Read - Admin & User)
    public function show($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('artikel.show', compact('artikel'));
    }

    // 📌 Menampilkan form tambah artikel (Admin Only)
    public function create()
    {
        return view('artikel.create');
    }

    // 📌 Menyimpan artikel baru (Admin Only)
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required'
        ]);

        Artikel::create($request->all());
        return redirect()->route('admin.artikel.index')->with('success', 'Artikel berhasil ditambahkan');
    }

    // 📌 Menampilkan form edit artikel (Admin Only)
    public function edit($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('artikel.edit', compact('artikel'));
    }

    // 📌 Menyimpan perubahan artikel (Admin Only)
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required'
        ]);

        $artikel = Artikel::findOrFail($id);
        $artikel->update($request->all());
        return redirect()->route('admin.artikel.index')->with('success', 'Artikel berhasil diperbarui');
    }

    // 📌 Menghapus artikel (Admin Only)
    public function destroy($id)
    {
        $artikel = Artikel::findOrFail($id);
        $artikel->delete();
        return redirect()->route('admin.artikel.index')->with('success', 'Artikel berhasil dihapus');
>>>>>>> Stashed changes
    }
}
