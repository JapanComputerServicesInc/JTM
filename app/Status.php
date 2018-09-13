<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = [
        'status'
    ];

    public function terminal_Managements()
    {
        return $this->hasMany('App\TerminalManagement');
    }

}
