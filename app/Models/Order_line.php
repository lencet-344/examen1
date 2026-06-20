<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order_line extends Model
{
    protected $fillable=[
        "quantity",
        "price",
        "subtotal_line"
    ];

    public function articles()
    {
        return $this->hasOne(Article::class);
    }
}
