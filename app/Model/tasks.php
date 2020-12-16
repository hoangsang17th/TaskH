<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class tasks extends Model
{
    protected $table = 'tasks';
    protected $primaryKey = 'Task_ID';
    protected $fillable = [
        'Task_ID',
        'Project_ID',
        'id',
        'Task_Name',
        'Task_Stage',
    ];
}
