<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Spaces extends Model
{
    use  HasFactory;

    protected $fillable = [
        'name',
        'type_id',
        'availability',
    ];
}
