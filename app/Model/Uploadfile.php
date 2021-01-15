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
        'Project_ID',
        'Des',
        'FileName',
    ];
    public function User()
    {
        return $this->belongsTo('App\Model\UserModel', 'id', 'id');
    }
}
