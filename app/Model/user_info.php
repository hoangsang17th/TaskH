<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class user_info extends Model
{
    protected $table = 'user_infos';
    protected $fillable = [
        'Info_ID',
        'id',
        'Account_Avatar',
        'User_Phone',
        'User_Profession',
        'User_Address',
        'User_Birthday',
        'User_Gender',
        'User_Facebook',
        'User_LinkedIn',
        'User_Des',
    ];
}
