<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = ['category_id', 'floor_id', 'number', 'description'];

    public function rules($id = '')
    {
        return [
            'category_id'   => 'required|exists:categories,id',
            'floor_id'      => 'required|exists:floors,id',
            'number'        => "required|unique:rooms,number,{$id},id",
            'description'   => "required",
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
}
