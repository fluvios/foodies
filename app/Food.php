<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $table = 'foods';
    protected $fillable = [
        'category_id', 'name',
        'description', 'price', 
        'cook_time'
    ];

    public function details()
    {
        return $this->hasMany('App\Detail');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
