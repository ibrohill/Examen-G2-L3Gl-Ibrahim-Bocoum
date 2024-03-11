<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camion extends Model
   {
       protected $table = 'Camion';
   
       protected $fillable = ['marque', 'date_achat', 'kilometrage', 'matricule', 'couleur', 'prix', 'image'];
   
       public function getImageAttribute()
       {
           return asset('storage/images/' . $this->attributes['image']);
       }
       
    

}
