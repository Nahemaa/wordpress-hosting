<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        
        'last_name',
        'first_name',
        'email',
        'confirm_email',
        'password',
        'confirm_password',
        'department',
        'sex',
        'marital_status',
        'address',
        'city',
        'zip_code',
        'contact_number',

    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

} 

