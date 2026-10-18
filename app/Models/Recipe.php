<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = [
        'name',
        'ingredients',
        'steps',
        'cook_time',
        'image',
        'category',
    ];

    /** Bahan sebagai array (dipisah per baris). */
    public function getIngredientListAttribute(): array
    {
        return array_values(array_filter(array_map('trim', explode("\n", $this->ingredients))));
    }

    /** Langkah sebagai array (dipisah per baris). */
    public function getStepListAttribute(): array
    {
        return array_values(array_filter(array_map('trim', explode("\n", $this->steps))));
    }
}
