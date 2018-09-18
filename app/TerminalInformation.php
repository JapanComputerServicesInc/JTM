<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TerminalInformation extends Model
{
    protected $fillable = [
        'name','model_number','producer'
    ];

    public function terminal_Managements()
    {
        return $this->hasMany('App\TerminalManagement');
    }

}
