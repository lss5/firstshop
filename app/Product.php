<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'active',
        'file',
    ];

    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }
}
