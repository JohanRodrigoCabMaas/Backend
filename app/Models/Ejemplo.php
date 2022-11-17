<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ejemplo extends Model
{
    use HasFactory;
    protected $fillable =[
        'nombre',
        'apellido',
        'email',
        'telefono',
        'plan',
        'periodo'
    ];
    protected $hidden=[
        'created_at',
        'updated_at',
    ];
}
