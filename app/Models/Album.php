<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Album extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description'];

    public function galleries(): HasMany
    {
        return $this->hasMany(Gallery::class);
    }
}
