<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminModel extends Model
{
    use HasFactory;
    protected $table = 'admin';
    protected $fillable = [
        'ten_admin','sdt_admin','anh','diachi_admin','email_admin','email_verified_at','created_at','updated_at'
    ];
}
