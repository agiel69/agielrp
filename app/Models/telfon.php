<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class telfon extends Model
{
    use HasFactory;
    
    protected $fillable = ['alamat', 'nomor_telepon', 'email', 'status_publis'];
}