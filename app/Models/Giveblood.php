<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Giveblood extends Model
{
    use HasFactory;
    protected $fillable = [ 
    'idHospital',
    'typeblood',
    'typerh', 
    'deficiencyBlood',
    ];

}
