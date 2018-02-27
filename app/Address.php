<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'address', 'country', 'city',
        'logo', 'postal_code', 'state','user_id'
    ];
}
