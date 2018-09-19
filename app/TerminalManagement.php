<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TerminalManagement extends Model
{
    protected $fillable = [
        'approval_no', 'pc_name', 'model_name', 'serial_no', 'memo', 'qr_code', 'status_id', 'depositories_id', 'hdd_id', 'cpu_id', 'os_id', 'memories_id', 'employees_id', 'office_informations_id', 'terminal_informations_id'
    ];

    public function cpu()
    {
        return $this->belongsTo('App\Cpu');
    }
    public function depository()
    {
        return $this->belongsTo('App\Depository', 'depositories_id', 'id');
    }

    public function employee()
    {
        return $this->belongsTo('App\Employee', 'employees_id', 'id');
    }
    public function hdd()
    {
        return $this->belongsTo('App\Hdd');
    }
    public function memory()
    {
        return $this->belongsTo('App\Memory', 'memories_id', 'id');
    }
    public function office_info()
    {
        return $this->belongsTo('App\OfficeInformation','office_informations_id' ,'id');
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
        return $this->belongsTo('App\TerminalInformation', 'terminal_informations_id', 'id');
    }

}
