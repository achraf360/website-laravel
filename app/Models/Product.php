<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug', 'ref', 'description', 'weight', 'dimensions', 'packaging', 'category_id', 'technology_id', 'recipe_id', 'image', 'is_active'];

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

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            $product->slug = Str::slug($product->name);
        });

        static::updating(function ($product) {
            $product->slug = Str::slug($product->name);
        });
    }
}
