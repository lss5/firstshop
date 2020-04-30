<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'description',
    ];

    public function products()
    {
        return $this->belongsToMany('App\Product');
    }

    public function products_limit()
    {
        return $this->belongsToMany('App\Product')->where('image', '!=', 'NULL')->take(4);
    }
}
