<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Montir extends Model
{
    use HasFactory;


    protected $fillable = [
        'nama_lengkap',
        'email',
        'password',
    ];
}
