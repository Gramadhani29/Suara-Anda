<?php
namespace App\Policies;

use App\Models\Artikel;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ArtikelPolicy
{
    use HandlesAuthorization;

    public function update(User $user, Artikel $artikel)
    {
        return $user->id === $artikel->user_id || $user->role === 'admin';
    }

    public function delete(User $user, Artikel $artikel)
    {
        return $user->id === $artikel->user_id || $user->role === 'admin';
    }
}

