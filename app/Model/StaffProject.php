<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class StaffProject extends Model
{
    protected $table = 'staff_projects';
    protected $primaryKey = 'SProject_ID';
    protected $fillable = [
        'SProject_ID',
        'Project_ID',
        'id',
        'Role_ID',
    ];
    public function Project()
    {
        # code...
        return $this->belongsTo('App\Model\project', 'Project_ID', 'Project_ID');
    }
}
