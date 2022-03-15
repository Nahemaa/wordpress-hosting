<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'users';

    protected $fillable = [
        
        'id',
        'last_name',
        'first_name',
        'email',
        'confirm_email',
        'password',
        'confirm_password',
        'department',
        'job_level',
        'job_position',
        'sex',
        'marital_status',
        'address',
        'city',
        'zip_code',
        'contact_number',

    ];

    protected $hidden = [
        'id',
        'password',
        'remember_token',
    ];

} 

