<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;       
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Personaje extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the Jugador that owns the Personaja
     *
     * @return BelongsTo<int, Jugador>
     */
    public function jugador(): BelongsTo
    {
        return $this->belongsTo(Jugador::class);   // cada post pertenece a una categoría (lado n relación 1:n)
    }

    /**
     * Get the Campanna that owns the Post
     *
     * @return BelongsTo<int, Campanna>
     */
    public function campanna(): BelongsTo
    {
        return $this->belongsTo(Campanna::class);       // cada post pertenece a un usuario (lado n relación 1:n)
    }
}
