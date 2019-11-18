<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class produit extends Model
{
    protected $table = 'produit';

    public function produit(){
      //return $this->HasMany(related: 'App/Model/category');
      return $this->belongsTo(category::class);

    }

}
