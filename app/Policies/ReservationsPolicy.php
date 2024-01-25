<?php

namespace App\Policies;

use App\Models\Reservations;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ReservationsPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, Reservations $reservations): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, Reservations $reservations): bool
    {
    }

    public function delete(User $user, Reservations $reservations): bool
    {
    }

    public function restore(User $user, Reservations $reservations): bool
    {
    }

    public function forceDelete(User $user, Reservations $reservations): bool
    {
    }
}
