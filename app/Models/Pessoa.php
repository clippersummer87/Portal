<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Validator;


class Pessoa extends Model
{
  protected $fillable = [
    'nome', 'matricula', 'dt_nasc', 'graduacao', 'dt_emissao', 'nr_porte',
    'dt_validade', 'orgao_emissor', 'municipio', 'estado', 'rg', 'cpf', 'natura',
    'nr_cnh', 'categ_cnh', 'tp_sanguineo', 'pai', 'mae', 'controle_interno', 'image' ,
  ];


}
