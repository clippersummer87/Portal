<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
  protected $fillable = [
    'id_tipo','de_categoria','publicado'
];
}
