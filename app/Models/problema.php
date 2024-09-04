<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class problema extends Model
{
  protected $fillable = [
    'de_problema','id_user','id_tipo','id_cat','id_setor','publicado','de_solucao','tempo'
];

}
