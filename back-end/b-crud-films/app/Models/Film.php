<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Film extends Model
{
    use HasFactory;

    // Especificamos la tabla en caso de que no siga la convención (si la tabla no es plural 'films')
    // protected $table = 'films';

    // Especificamos las columnas que pueden ser llenadas masivamente (mass assignable)
    protected $fillable = [
        'title',
        'description',
        'img_url',
    ];

    // Si tu modelo usa Timestamps (created_at, updated_at), por defecto Laravel los manejará.
    // Si no lo usa, puedes deshabilitarlo de esta forma:
    // public $timestamps = false;

    // Si necesitas algún tipo de conversión o manipulación de datos, puedes añadir métodos adicionales.
}
