<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table="users";
    protected $fillable = [
            'id_user', 
            'name',
            'cedula',
            'email', 
            'telefono',
            'username',
            'password',
            'password_api',
            'profile', 
            'status', 
            'access_type',
            'user_type', 
            'created_by', 
            'date_created',
            'modified_by',
            'date_modified'

    
    ];

    public $timestamps=false;
    protected $primaryKey = 'id_user';


}
