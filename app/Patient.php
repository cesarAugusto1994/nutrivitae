<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'name', 'email', 'birth', 'from', 'phone', 'gender', 'occupation', 'zip'
    ];

}
