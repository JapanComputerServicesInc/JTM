<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Depository extends Model
{
    protected $fillable = [
        'name'
    ];

    public function terminal_Managements()
    {
        return $this->hasMany('App\TerminalManagement');
    }

}
