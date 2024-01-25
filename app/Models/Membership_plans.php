<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Membership_plans extends Model
{
    use  HasFactory;

    protected $fillable = [
        'plan_name',
        'space_type',
        'customer_type',
        'time_period',
        'description',
        'price',
    ];
}
