<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address_shipping extends Model
{
    protected $fillable=[
        "customer_id",
        "number",
        "street",
        "neighborhood",
        "city",
        "reference_location",
        "state_address",
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function order_lines()
    {
        return $this->hasMany(Order_line::class);
    }
}
