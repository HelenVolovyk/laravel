<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderStatus extends Model
{

    protected $table = 'orders_statuses';

    protected $fillable = [
        'id',
        'name'

    ];

    public function orders()
    {
        return $this->hasMany(\App\Models\Order::class);
    }
}
