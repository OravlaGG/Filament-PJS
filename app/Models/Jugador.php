<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;  
use Illuminate\Database\Eloquent\Relations\HasMany; 

class Jugador extends Model
{
    use HasFactory;                                     // añadimos desde aquí ----

    protected $guarded = [];

    /**
     *  Get all of the posts for the Category
     *
     *  @return BelongsTo<int, Post>
     */
    public function personajes(): HasMany
    {
        return $this->hasMany(Personaje::class);             // una categoría contendrá varios posts (relación 1:n, lado 1) 
    }
}
