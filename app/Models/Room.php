<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $appends = ['color'];

    protected $fillable = ['category_id', 'floor_id', 'number', 'description'];

    public function rules($id = '')
    {
        return [
            'category_id' => 'required|exists:categories,id',
            'floor_id' => 'required|exists:floors,id',
            'number' => "required|unique:rooms,number,{$id},id",
            'description' => "required",
        ];
    }

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

    public function scopeHasReservation($query)
    {
        $query->whereHas('reservations', function ($query) {
            return $query->where('state', 'Ativa');
        })->where('id', $this->id);

        return $query;
    }

    public function scopeHasCheckin($query)
    {
        $query->whereHas('reservations', function ($query) {
            return $query->where('state', 'Checkin');
        })->where('id', $this->id);

        return $query;
    }

    public function scopeHasCanceled($query)
    {
        $query->whereHas('reservations', function ($query) {
            return $query->where('state', 'Cancelada');
        })->where('id', $this->id);

        return $query;
    }

    public function getColorAttribute($value)
    {
        $color = 'card-success';

        if (count($this->hasReservation()->get()) > 0) {
            $color = 'card-info';
        } else {
            if (count($this->hasCheckin()->get()) > 0) {
                $color = 'card-success';
            } else {
                if (count($this->hasCanceled()->get()) > 0) {
                    $color = 'card-danger';
                }
            }
        }

        return $color;
    }
}
