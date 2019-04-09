<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelPerdirDetail extends Model
{
    protected $table = 'perdir_details';

    public function modelPerdir()
    {
      return $this->hasOne('App\ModelPerdir');
    }
}
