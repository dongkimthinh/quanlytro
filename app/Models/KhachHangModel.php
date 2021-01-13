<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhachHangModel extends Model
{
    use HasFactory;
    protected $table = 'khachhang';
    protected $fillable = [
        'tenkh','sdt_kh','anh','diachi_kh','email_kh','email_verified_at','created_at','updated_at'
    ];
}
