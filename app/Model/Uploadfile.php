<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Uploadfile extends Model
{
    protected $table = 'uploadfiles';
    protected $primaryKey = 'Upload_ID';
    protected $fillable = [
        'Upload_ID',
        'id',
        'Task_ID',
    ];
}
