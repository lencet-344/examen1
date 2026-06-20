<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=[
        "date_create",
        "subtotal",
        "mount_tax",
        "total_general",
        "additional_notes",
        "state-order"
    ];

    public function customers()
    {
        return $this->hasOne(Customer::class);
    }

    public function address_shipping()
    {
        return $this->hasMany(Address_shipping::class);
    }
}
