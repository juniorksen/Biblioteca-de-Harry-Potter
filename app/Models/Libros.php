<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libros extends Model
{
    use HasFactory;
    protected $table = 'libros';


    protected $fillable = [
        'titulo', 
        'autor', 
        'genero', 
        'descripcion',
        'fecha_publicacion',
    ];


    protected $hidden = [
        'id',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
