<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 'calle', 'codigo_postal', 'colonia', 
        'ciudad', 'estado', 'pais', 'telefono', 'rfc'
    ];

    public function desarrollos()
    {
        return $this->hasMany(Desarrollo::class);
    }
    public function apoderados()
    {
        return $this->hasMany(ApoderadoLegal::class);
    }
}
