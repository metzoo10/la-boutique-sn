<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    protected $fillable = ['numero_commande', 'montant_total', 'utilisateur_id'];


    public function products()
    {
        return $this->belongsToMany(Produit::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
