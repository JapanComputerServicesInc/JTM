<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Os extends Model
{
    protected $fillable = [
        'name'
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
    protected $table = 'os';
}
