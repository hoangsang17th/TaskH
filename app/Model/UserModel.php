<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'name',
        'email',
        'Avatar',
        'Phone',
        'Profession',
        'Address',
        'Birthday',
        'Facebook',
        'LinkedIn',
        'Des'
    ];
}
