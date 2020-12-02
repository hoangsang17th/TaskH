<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class todo extends Model
{
    protected $fillable = [
        'ToDo_ID',
        'id',
        'Mission_ToDo',
        'Des_ToDo',
        'Completion_Date',
    ];
}
