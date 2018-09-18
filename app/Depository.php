<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Depository extends Model
{
    protected $fillable = [
        'depository'
    ];

    public function terminal_Managements()
    {
        return $this->hasMany('App\TerminalManagement');
    }

}
