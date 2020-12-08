<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class StaffProject extends Model
{
    protected $table = 'staff_projects';
    protected $fillable = [
        'SProject_ID',
        'Project_ID',
        'id',
    ];
    public function Project()
    {
        # code...
        return $this->belongsTo('App\Model\project', 'Project_ID', 'Project_ID');
    }
}
