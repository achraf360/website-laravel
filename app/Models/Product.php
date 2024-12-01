<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'ref', 'description', 'weight', 'dimensions', 'packaging', 'category_id', 'technology_id', 'recipe_id', 'image', 'is_active'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function technology()
    {
        return $this->belongsTo(Technology::class);
    }

    public function recipe()
    {
        return $this->belongsTo(Recipe::class);
    }
}
