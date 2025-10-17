<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Projet extends Model
{
    use HasFactory;

    protected $table = 'projets'; 

    protected $fillable = [
        'titre',
        'slug',
        'description',
        'image',
        'technologies',
        'service_id',
        'resultats',
    ];

    protected $casts = [
        'technologies' => 'array',
        'image' => 'array',
    ];
    
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
    public function souServices()
    {
        return $this->belongsToMany(SousService::class, 'projet_sous_service');
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
