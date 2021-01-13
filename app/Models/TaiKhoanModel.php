<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class TaiKhoanModel extends Authenticatable
{
    use HasFactory;
    protected $table = 'taikhoan';

    protected $primaryKey = 'id_tk';
    protected $fillable = [
        'id_kh','ten_tk','id_tk','password','quyen','remember_token','created_at','updated_at'
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // public function setPasswordAttribute($password){
    //     $this->attributes['password'] = Hash::make($password);
    // }
}
