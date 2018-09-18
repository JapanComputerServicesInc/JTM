<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cpu extends Model
{
    protected $fillable = [
        'cpu'
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
    protected $table = 'cpu';
}