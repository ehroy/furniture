<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'name',
        'desc',
        'price',
        'slug',
        'image',
        'active',
        'recomended',
    ];
    protected $casts = [
        'image' => 'array',
    ];
    public function category(): BelongsTo
    {
        return $this->belongsTo(Categori::class);
    }
}
