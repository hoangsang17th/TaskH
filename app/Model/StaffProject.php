<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class StaffProject extends Model
{
    protected $table = 'staff_projects';
    protected $primaryKey = 'SProject_ID';
    protected $fillable = [
        'Staff_ID',
        'Project_ID',
        'id',
        'Role_ID',
    ];
    public function Project()
    {
        return $this->belongsTo('App\Model\project', 'Project_ID', 'Project_ID');
    }
    public function User()
    {
        return $this->belongsTo('App\Model\UserModel', 'id', 'id');
    }
}
