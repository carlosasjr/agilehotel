<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['description'];

    public function rules($id = '')
    {
        return [
            'description'  => "required|min:3|max:100|unique:categories,description,{$id},id",
        ];
    }

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
}
