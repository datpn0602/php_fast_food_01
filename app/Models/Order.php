<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = [
        'id',
        'full_name',
        'address',
        'phone',
        'description',
        'status',
        'date',
        'store_id',
        'user_id',
    ];
    protected $dates = ['deleted_at'];
    public $timestamps = false;

    public function store()
    {
        return $this->belongsTo(Store::class);
    }

    public function orderFood()
    {
        return $this->hasMany(OrderFood::class);
    }
}
