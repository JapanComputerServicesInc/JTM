<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'name','departments_id'
    ];

    public function department()
    {
        return $this->belongsTo('App\Department', 'departments_id', 'id');
    }

    public function terminal_Managements()
    {
        return $this->hasMany('App\TerminalManagement');
    }

}
