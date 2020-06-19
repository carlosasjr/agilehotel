<?php

namespace App\Models;

use App\Helpers\Helper;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'begin',
        'end',
        'checkin',
        'checkout',
        'state',
        'canceled_at',
        'observation',
        'person_id'
    ];


    protected $casts = [
          'canceled_at' => 'datetime'
    ];


    public function person()
    {
        return $this->belongsTo(Person::class);
    }

    public function rooms()
    {
        return $this->belongsToMany(Room::class, 'reservation_room');
    }

    public function getBeginAttribute($value)
    {
        if ($value)
            return Helper::formatDateTime($value);
    }


    public function getEndAttribute($value)
    {
        if ($value)
            return Helper::formatDateTime($value);
    }

    public function getCheckinAttribute($value)
    {
        if ($value)
        return Helper::formatDateTime($value);
    }

    public function getCheckoutAttribute($value)
    {
        if ($value)
        return Helper::formatDateTime($value);
    }

    public function getCanceledAtAttribute($value)
    {
        if ($value)
        return Helper::formatDateTime($value);
    }



}
