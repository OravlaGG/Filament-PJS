<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;  
use Illuminate\Database\Eloquent\Relations\HasMany; 

class Campanna extends Model
{
    use HasFactory;                                     // añadimos desde aquí ----

    protected $guarded = [];

    /**
     *  Get all of the personaje for the Campanna
     *
     *  @return BelongsTo<int, Campanna>
     */
    public function personajes(): HasMany
    {
        return $this->hasMany(Personaje::class);             // una categoría contendrá varios posts (relación 1:n, lado 1) 
    }
}
