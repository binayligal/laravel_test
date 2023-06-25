<?php

namespace App\Models;

use App\Http\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Employee extends Authenticatable
{
    use HasFactory;
    protected $table = 'employees_master';
    protected $primaryKey = 'employee_id';
    protected $guarded = ['employee_id'];
    public function department(){
        return $this->belongsTo(Department::class,"depar_id","dept_id");
    }

    public function full_name(){
        return $this->first_name." ".$this->middle_name." ".$this->last_name;
    }
}
