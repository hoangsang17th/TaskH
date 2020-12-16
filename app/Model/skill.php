<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class skill extends Model
{
    protected $table = 'skills';
    protected $primaryKey = 'Skill_ID';
    protected $fillable = [
        'Skill_ID',
        'Skill_Name',
    ];
}
