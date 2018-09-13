<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hdd extends Model
{
    protected $fillable = [
        'hdd'
    ];

    public function terminal_Managements()
    {
        return $this->hasMany('App\TerminalManagement');
    }

    /**
     * モデルと関連しているテーブル
     *
     * @var string
     */
    protected $table = 'hdd';
}
