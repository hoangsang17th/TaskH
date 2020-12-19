<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class statusproject extends Model
{
    protected $table = 'statusprojects';
    protected $primaryKey = 'Status_ID';
    protected $fillable = [
        'Status_ID',
        'Status_Name',
    ];
    public function statusproject()
    {
        # code...
        return $this->belongsTo('App\Model\project', 'Status_ID', 'Status_ID');
    }
}
