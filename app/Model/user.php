<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    protected $table = 'users';
    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
        'Position_ID',
    ];
}
