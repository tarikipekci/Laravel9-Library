<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public function category()
    {

        return $this->belongsTo(Category::class);

    }

    public function comment()
    {

        return $this->hasMany(Comment::class);

    }

    public function shopcart()
    {
        return $this->hasMany(ShopCart::class);
    }

    public function orderproduct()
    {
        return $this->hasMany(OrderProduct::class);
    }


}
