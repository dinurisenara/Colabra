<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\Bookings;
use App\Models\Membership_plans;
use App\Models\Reservations;
use App\Models\Space_types;
use App\Models\spaces;

use App\Policies\BookingsPolicy;
use App\Policies\Membership_plansPolicy;
use App\Policies\ReservationsPolicy;
use App\Policies\Space_typesPolicy;
use App\Policies\spacesPolicy;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
        Membership_plans::class => Membership_plansPolicy::class,
        Space_types::class => Space_typesPolicy::class,
        spaces::class => spacesPolicy::class,
        Spaces::class => SpacesPolicy::class,
        Reservations::class => ReservationsPolicy::class,
        Bookings::class => BookingsPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
    }
}
