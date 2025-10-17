<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\SousService;

class Article extends Model
{
    protected $fillable = [
        'titre',
        'slug',
        'contenu',
        'image',
        'auteur_id',
        'publie',
    ];

    protected $casts = [
        'publie' => 'boolean',
    ];

    // Relation avec les sous-services (many-to-many)
    public function souServices()
    {
        return $this->belongsToMany(SousService::class);
    }

    // Relation avec auteur (user)
    public function auteur()
    {
        return $this->belongsTo(User::class, 'auteur_id');
    }

    protected static function booted()
    {
        static::creating(function ($article) {
            if (empty($article->slug)) {
                $article->slug = Str::slug($article->titre);
            }
        });
    }
    
}
