<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = ['nom', 'prix', 'stock', 'description', 'info', 'image', 'category_id'];


     // Définir la relation "many-to-one" avec le modèle Category
     public function category()
     {
         return $this->belongsTo(Category::class);
     }
}