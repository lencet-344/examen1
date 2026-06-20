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

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
