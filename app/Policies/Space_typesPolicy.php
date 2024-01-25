<?php

namespace App\Policies;

use App\Models\Space_types;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class Space_typesPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, Space_types $space_types): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, Space_types $space_types): bool
    {
    }

    public function delete(User $user, Space_types $space_types): bool
    {
    }

    public function restore(User $user, Space_types $space_types): bool
    {
    }

    public function forceDelete(User $user, Space_types $space_types): bool
    {
    }
}
