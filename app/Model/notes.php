<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class notes extends Model
{
    protected $table = 'notes';
    protected $primaryKey = 'Note_ID';
    protected $fillable = [
        'Note_ID',
        'id',
        'Note_Name',
        'Note_Des',
        'Rule',
        'Note_Date',
    ];
}
