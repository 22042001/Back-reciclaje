<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'offer_id',
        'ruta_imagen',
    ];

    /**
     * Relación con la oferta (offer).
     * Una imagen pertenece a una oferta.
     */
    public function offer()
    {
        return $this->belongsTo(Offer::class);
    }

    /**
     * Obtener la URL completa de la imagen.
     *
     * @return string
     */
    public function getUrlAttribute()
    {
        return asset('storage/' . $this->ruta_imagen);
    }
}

