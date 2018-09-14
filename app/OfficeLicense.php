<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OfficeLicense extends Model
{
    protected $fillable = [
        'name'
    ];

    public function officeInformation()
    {
        return $this->hasMany('App\officeInformation');
    }
}
