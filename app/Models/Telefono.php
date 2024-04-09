<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telefono extends Model
{

    protected $table = 'telefonos';
    protected $fillable = [
        'telefono'
    ];

    use HasFactory;
}
