<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'produits';
    protected $primaryKey = 'id';
    protected $fillable = ['nom', 'prix', 'stock', 'description', 'info', 'image', 'categorie'];
    


    
}