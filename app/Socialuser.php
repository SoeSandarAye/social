<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Socialuser extends Model
{
    //
      protected $fillable = [
        'userid', 'phone', 'dob', 'gender' , 'photo','address','status',
    ];
}
