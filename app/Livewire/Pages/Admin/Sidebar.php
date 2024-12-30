<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Sidebar extends Component
{
    public $user;

    public function mount()
    {
        $this->user = Auth::user();

        // Validasi jika bukan admin
        if (!$this->user || !$this->user->hasRole('admin')) {
            abort(403, 'Anda tidak memiliki akses ke halaman ini.');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function render()
    {
        return view('livewire.sidebar');
    }
}
