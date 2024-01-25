<?php

namespace App\Policies;

use App\Models\Spaces;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SpacesPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, Spaces $spaces): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, Spaces $spaces): bool
    {
    }

    public function delete(User $user, Spaces $spaces): bool
    {
    }

    public function restore(User $user, Spaces $spaces): bool
    {
    }

    public function forceDelete(User $user, Spaces $spaces): bool
    {
    }
}
