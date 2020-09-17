<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = [
        'name', 'slug',
    ];

    public function items(){
        return $this->hasMany('App\Item');
    }
}
