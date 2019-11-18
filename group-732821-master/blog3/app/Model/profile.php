<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
  protected $table = 'profile';

  public function profile(){
    //return $this->HasOne(related: 'App/Model/profile');
    return $this->hasOne(panier::class);

  }
}
