<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['nomCateg'];

    // Relation avec Product
    public function products()
    {
        return $this->belongsToMany(Produit::class);
    }
}
