<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhongModel extends Model
{
    use HasFactory;
    protected $table = 'phong';
    protected $filable = [
        'hinh_phong',
    ];

}
