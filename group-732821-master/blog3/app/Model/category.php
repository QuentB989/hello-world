<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
  protected $table = 'category';

  public function category(){
    //return $this->HasMany(related: 'App/Model/category');
    return $this->hasMany(produit::class);
    return $this->belongsTo(panier::class);

  }

}
