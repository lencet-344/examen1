<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Factory_article extends Model
{
    protected $fillable=[
        "current_stock",
        "negotiation_cost",
        "date_estimated"
    ];

    public function articles()
    {
        return $this->hasOne(Article::class);
    }
}
