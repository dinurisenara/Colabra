<?php

namespace App\Policies;

use App\Models\Bookings;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class BookingsPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, Bookings $bookings): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, Bookings $bookings): bool
    {
    }

    public function delete(User $user, Bookings $bookings): bool
    {
    }

    public function restore(User $user, Bookings $bookings): bool
    {
    }

    public function forceDelete(User $user, Bookings $bookings): bool
    {
    }
}
