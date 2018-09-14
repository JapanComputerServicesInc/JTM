<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TerminalManagement extends Model
{
    protected $fillable = [
        'approval_no', 'pc_name', 'model_name', 'serial_no', 'memo', 'qr_code', 'status_id', 'depositories_id', 'hdd_id', 'cpu_id', 'os_id', 'memories_id', 'employees_id', 'office_info_id', 'terminal_info_id'
    ];

    public function cpu()
    {
        return $this->belongsTo('App\Cpu');
    }
    public function depository()
    {
        return $this->belongsTo('App\Depository');
    }

    public function employee()
    {
        return $this->belongsTo('App\Employee');
    }
    public function hdd()
    {
        return $this->belongsTo('App\Hdd');
    }
    public function memory()
    {
        return $this->belongsTo('App\Memory');
    }
    public function office_info()
    {
        return $this->belongsTo('App\OfficeInfo');
    }
    public function os()
    {
        return $this->belongsTo('App\Os');
    }
    public function status()
    {
        return $this->belongsTo('App\Status');
    }
    public function terminal_info()
    {
        return $this->belongsTo('App\TerminalInfo');
    }

}
