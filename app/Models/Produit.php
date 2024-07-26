<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    protected $table = 'produits';
    protected $fillable = ['nomProd', 'prix', 'stock', 'description', 'info', 'image', 'category_id'];

    // Relation avec Category
    public function categories()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

     // Relation avec Commande
     public function commandes()
     {
         return $this->belongsTo(Commande::class,'commande_produit')
                    ->withPivot('quantity');
     }

}
