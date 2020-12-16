<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class configpage extends Model
{
    protected $table = 'configpages';
    protected $primaryKey = 'Config_ID';
    protected $fillable = [
        'Config_ID',
        'Config_Name',
        'Content',
    ];
}
