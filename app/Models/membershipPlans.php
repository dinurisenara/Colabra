<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class membershipPlans extends Model
{
    use HasFactory;

    protected $fillable = [
        'planName',
        'user_type',
        'planDescription',
        'planPrice'
        
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];


}
