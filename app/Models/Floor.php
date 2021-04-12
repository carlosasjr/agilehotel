<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Floor extends Model
{
    protected $fillable = ['number'];


    public function rules($id = '')
    {
        return [
            'number' => "required",
        ];
    }


    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
}
