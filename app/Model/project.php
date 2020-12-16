<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    protected $table = 'projects';
    protected $primaryKey = 'Project_ID';
    protected $fillable = [
        'Project_ID',
        'Customer_ID',
        'Project_Name',
        'Status_ID',
        'Des_Project',
        'Project_Image',
        'Start_Date',
        'End_Date',
        'Budget',
    ];
    public function StaffProject()
    {
        # code...
        return $this->hasMany('App\Model\StaffProject', 'Project_ID', 'Project_ID');
    }
}
