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

    public function products_active()
    {
        return $this->belongsToMany('App\Product')
                    ->where([['active', true]])
                    ->orderBy('created_at', 'desc');
    }

    public function products_limit()
    {
        return $this->belongsToMany('App\Product')
                    ->where([['image', '!=', 'NULL'],['active', true]])
                    ->orderBy('created_at', 'desc')
                    ->take(4);
    }
}
