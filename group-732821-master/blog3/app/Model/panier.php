<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class panier extends Model
{
  protected $table = 'panier';

  public function panier(){
    //return $this->HasMany(related: 'App/Model/panier');
    return $this->hasMany(category::class);
    return $this->belongsTo(profile::class);

  }


}
