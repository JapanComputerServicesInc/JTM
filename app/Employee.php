<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'name','department_id'
    ];

    public function department()
    {
        return $this->belongsTo('App\Department');
    }

    public function terminal_Managements()
    {
        return $this->hasMany('App\TerminalManagement');
    }

}
