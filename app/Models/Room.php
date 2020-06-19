<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function reservations()
    {
        return $this->belongsToMany(Reservation::class, 'reservation_room');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function floor()
    {
        return $this->belongsTo(Floor::class);
    }
}
