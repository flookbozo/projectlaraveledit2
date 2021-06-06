<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locationuser extends Model
{
    use HasFactory;
    protected $fillable = [
        'idUser',
        'latitude',
        'longitude',
        'distance',
        'status',
    ];
}
