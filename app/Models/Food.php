<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $table = 'foods';
    protected $fillable = [
        'id',
        'name',
        'description',
        'information',
        'price',
        'rating',
        'size',
        'image',
        'promotion_id',
        'type_id',
        'category_id',
    ];
    public $timestamps = false;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function promotion()
    {
        return $this->belongsTo(Promotion::class);
    }

    public function foodType()
    {
        return $this->belongsTo(FoodType::class);
    }

    public function orderFood()
    {
        return $this->hasMany(OrderFood::class);
    }

    public function storeFood()
    {
        return $this->hasMany(StoreFood::class);
    }

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }

    public function foodDetail()
    {
        return $this->hasMany(FoodDetail::class);
    }
}
