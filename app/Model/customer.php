<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $table = 'customers';
    protected $primaryKey = 'Customer_ID';
    protected $fillable = [
        'Customer_ID',
        'Customer_Name',
        'Customer_Phone',
        'Customer_Address',
        'Customer_Email',
        'Customer_Facebook',
        'Customer_Description',
        'Customer_Birthday',
    ];
    public function Customer()
    {
        return $this->hasOne('App\Model\project', 'Customer_ID', 'Customer_ID');
    }
}
