<?php
namespace App\Http\Controllers;
use App\Http\Middleware;
use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');  // Middleware auth memastikan pengguna sudah login
        $this->middleware('admin')->only(['create', 'store', 'edit', 'update', 'destroy']);  // Hanya admin yang bisa mengakses metode ini
        $this->middleware('auth', 'role:User')->only(['index', 'show']);  // Hanya user yang bisa mengakses metode ini
    }

    public function index()
    {
        $artikels = Artikel::all();
        return view('artikels.index', compact('artikels'));
    }

    public function create()
    {
        return view('artikels.create');
    }

    public function store(Request $request)
    {
        // Store the new article
    }

    public function show($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('artikels.show', compact('artikel'));
    }

    public function edit($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('artikels.edit', compact('artikel'));
    }

    public function update(Request $request, $id)
    {
        // Update the article
    }

    public function destroy($id)
    {
        // Delete the article
    }
}
