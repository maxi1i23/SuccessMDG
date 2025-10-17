<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $fillable = ['nom', 'slug', 'description'];

    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    
    protected static function booted()
    {
        static::creating(function ($service) {
            if (empty($service->slug)) {
                $service->slug = Str::slug($service->titre);
            }
        });
    }
}
