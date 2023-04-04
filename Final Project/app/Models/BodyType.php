<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BodyType extends Model
{
    use HasFactory;
    
    protected $table = 'body_types';
    
    public function cars(): HasMany
    {
        return $this->hasMany(Cars::class);
    }
}
