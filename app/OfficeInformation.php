<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OfficeInformation extends Model
{
    protected $fillable = [
        'name','office_licenses_id'
    ];

    public function office_license()
    {
        return $this->belongsTo('App\OfficeLicense','office_licenses_id','id');
    }

    public function terminal_Managements()
    {
        return $this->hasMany('App\TerminalManagement');
    }

}
