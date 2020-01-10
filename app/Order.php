<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = [
        'food_process_amount', 'tax_percentage',
        'service_percentage', 'total_amount',
        'status'
    ];

    public function details()
    {
        return $this->hasMany('App\Detail');
    }
}
