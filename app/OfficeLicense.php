<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OfficeLicense extends Model
{
    protected $fillable = [
        'name'
    ];

    public function officeInfo()
    {
        return $this->hasMany('App\OfficeInfo');
    }
}
