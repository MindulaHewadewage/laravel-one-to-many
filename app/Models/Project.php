<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title', 'image', 'content', 'slogan', 'type_id'];


    // assegno la relazione con le categorie
    public function projects()
    {
        return $this->belongsTo(Project::class);
    }
}
