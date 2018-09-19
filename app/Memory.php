<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Memory extends Model
{
    protected $fillable = [
        'name'
    ];

    public function terminal_Managements()
    {
        return $this->hasMany('App\TerminalManagement');
    }
}
