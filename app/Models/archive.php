<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class archive extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'id',
        'employee_id',
        'last_name',
        'first_name',
        'email',
        'confirm_email',
        'password',
        'confirm_password',
        'department',
        'job_level',
        'job_position',

    ];


}
