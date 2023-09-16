<?php

namespace App\Models;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Model;

class attendence extends Model

{

    protected $table = 'attendences';
    
    
    public function employee()
    {
        return $this->belongsTo(Employee::class,'emp_id');
    }
}
