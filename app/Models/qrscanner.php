<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class qrscanner extends Model
{
    use HasFactory;

    protected $table = 'attendance';

    protected $fillable = [

        'employee_id',
        'time_in',
        'time_out',
        'log_date',
        'status'

    ];

    public $timestamps = false; 

}
