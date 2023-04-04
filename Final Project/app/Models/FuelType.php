<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FuelType extends Model
{
    use HasFactory;

    protected $table = 'fuel_types';

    public function cars(): HasMany
    {
        return $this->hasMany(Cars::class);
    }
}
