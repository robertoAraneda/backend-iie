<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividades extends Model
{
  protected $table = 'actividades';

  protected $primaryKey = 'idactividad';

  public $preserveKey = true;

  public $incrementing = false;
}
