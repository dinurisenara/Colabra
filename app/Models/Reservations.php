<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservations extends Model
{
    use  HasFactory;

    protected $fillable = [
        'user_id',
        'space_types_id',
        'start_time',
        'end_time',
        'status'
    ];

    protected $casts = [
        'start_time' => 'datetime',
        'end_time' => 'datetime',
    ];

    // Define the possible values for the 'status' attribute
    const STATUS_PENDING = 'pending';
    const STATUS_CONFIRMED = 'confirmed';
    const STATUS_COMPLETED = 'completed';

    // Define the attributes that should be mutated to dates
    protected $dates = ['start_time', 'end_time'];

    // Additional methods for automated status update
    public function updateStatusBasedOnCurrentTime()
    {
        $currentTime = now();

        if ($this->status === self::STATUS_PENDING && $this->start_time <= $currentTime) {
            $this->status = self::STATUS_CONFIRMED;
        }

        if ($this->status === self::STATUS_CONFIRMED && $this->end_time <= $currentTime) {
            $this->status = self::STATUS_COMPLETED;
        }

        $this->save();
    }



    // Additional methods for booking conversion
    public function convertToBooking()
    {
        // Logic to convert a past reservation to a booking
        // This could involve creating a new Booking model instance
        // and copying relevant details from the reservation.
    }

}
