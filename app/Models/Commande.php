<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','montant_total', 'status'];


    public function products()
    {
        return $this->belongsToMany(Produit::class,'commande_produits');
    }

    public function items()
    {
        return $this->hasMany(CommandeProduit::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class,'commande_produits,user_id');
    }
}
