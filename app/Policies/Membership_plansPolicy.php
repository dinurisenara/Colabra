<?php

namespace App\Policies;

use App\Models\Membership_plans;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class Membership_plansPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, Membership_plans $membership_plans): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, Membership_plans $membership_plans): bool
    {
    }

    public function delete(User $user, Membership_plans $membership_plans): bool
    {
    }

    public function restore(User $user, Membership_plans $membership_plans): bool
    {
    }

    public function forceDelete(User $user, Membership_plans $membership_plans): bool
    {
    }
}
