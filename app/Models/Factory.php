<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Factory extends Model
{
    protected $fillable=[
        "company_name",
        "identification_card",
        "telephone",
        "email",
        "address",
        "state_supplier"
    ];
}
