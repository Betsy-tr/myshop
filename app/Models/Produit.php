<?php

namespace App\Models;

use App\Models\User;
use App\Models\Categorie;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Produit extends Model
{
    use HasFactory;

    protected $fillable = ['categorie_id', 'user_id','name', 'description', 'prix', 'image'];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class) ; 
    }

    public function categorie() : BelongsTo
    {
        return $this->belongsTo(Categorie::class) ; 
    }
}
