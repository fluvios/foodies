<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $table = 'details';
    protected $fillable = [
        'order_id', 'food_id',
        'quantity', 'total'
    ];

    public function details()
    {
        return $this->hasMany('App\Detail');
    }
}
