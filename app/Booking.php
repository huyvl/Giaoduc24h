<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table='bookings';

    protected $fillable = [
        'name',
        'email',
        'address',
        'phone',
    ];
}
