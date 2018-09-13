<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OfficeInfo extends Model
{
    protected $fillable = [
        'name','office_licenses_id'
    ];

    public function office_license()
    {
        return $this->belongsTo('App\OfficeLicense');
    }

    public function terminal_Managements()
    {
        return $this->hasMany('App\TerminalManagement');
    }

}
