<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class todo extends Model
{
    protected $table = 'todos';
    protected $primaryKey = 'ToDo_ID';
    protected $fillable = [
        'ToDo_ID',
        'id',
        'Mission_ToDo',
        'Completion_Date',
    ];
}
