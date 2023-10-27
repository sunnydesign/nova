<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    use HasFactory;

    /**
     * Get the categories for the building.
     */
    public function categories()
    {
        return $this->hasMany(Category::class);
    }
}
