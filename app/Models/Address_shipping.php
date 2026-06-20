<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address_shipping extends Model
{
    protected $fillable=[
        "number",
        "street",
        "neighborhood",
        "city",
        "reference_location",
        "state_address",
    ];

    public function customers()
    {
        return $this->hasOne(Customer::class);
    }

    public function orders()
    {
        return $this->hasOne(Order::class);
    }
}
