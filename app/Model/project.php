<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    protected $table = 'projects';
    protected $fillable = [
        'Project_ID',
        'Customer_ID',
        'Project_Name',
        'Status_ID',
        'Des_Project',
        'Start_Date',
        'Completion_Date',
        'Budget',
    ];
}
