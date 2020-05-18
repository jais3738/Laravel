<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhpUser extends Model
{
    //
    protected $fillable = [
        'user_name', 'email_address', 'phone_number',
    ];

}
