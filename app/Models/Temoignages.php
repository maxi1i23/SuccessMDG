<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Temoignages extends Model
{
        protected $fillable = ['nom_client', 'entreprise', 'texte', 'image'];
}