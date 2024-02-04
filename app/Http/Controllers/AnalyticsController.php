<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\User;
use App\Models\Reservations;
use App\Models\Space_types;
use App\Models\Spaces;
use App\Models\Bookings;

class AnalyticsController extends Controller
{

public function index()
{
    $totalUsers = User::count();
    $businessUsers = User::where('customerType', 'business')->count();
    $personalUsers = User::where('customerType', 'personal')->count();
    $spaceTypes = Space_types::all();


    $reservationCount = Reservations::count();
    $spaceTypeCount = Space_types::count();
    $spaceCount = Spaces::count();
    $bookingCount = Bookings::count();

    $spacesByType = Spaces::join('Space_types', 'Spaces.type_id', '=', 'Space_types.id')
        ->groupBy('Spaces.type_id', 'Space_types.type') // Add Space_types.type to GROUP BY
        ->selectRaw('Spaces.type_id, Space_types.type, count(*) as count')
        ->get()
        ->keyBy('type_id')
        ->map(function ($item) {
            return [
                'count' => $item->count,
                'type' => $item->type,
            ];
        });



    ;



    return view('admin.analytics', compact(
        'totalUsers',
        'businessUsers',
        'personalUsers',
        'reservationCount',
        'spaceTypeCount',
        'spaceCount',
        'bookingCount',
        'spacesByType',
        'spaceTypes',


    ));
}
}
