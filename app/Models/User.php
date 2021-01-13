<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'taikhoan';
    protected $table1 = 'khachhang';
    protected $fillable = [
        // 'name',
        // 'email',
        // 'password',
        'ten_tk','ten_kh','password','quyen'
    ];
    public function setPasswordAttribute($password){
        $this->attributes['password'] = Hash::make($password);
    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    // protected $fillable = [
    //     'id_kh','ten_tk','password','quyen','remember_token','created_at','updated_at'
    // ];

}
