<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OfficeLicense extends Model
{
    protected $fillable = [
        'name'
    ];

    public function office_information()
    {
        return $this->hasMany('App\officeInformation');
    }
}
