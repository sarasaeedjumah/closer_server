<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    public $table = 'users';

    protected $fillable = [
         'name',
         'phone',
         'password',
         'x_location',
         'y_location',
         'trans_Type',
         'code_car',
         'type'
    ];
    protected $hidden = [
        'password_confirmation',
        'remember_token',
        'email_verified_at',
        // 'phone_verified_at',
        'updated_at',
        'deleted_at'
    ];

}
