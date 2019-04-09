<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelPerdirJenis extends Model
{
    protected $table = 'perdir_jenis';

    public function modelPerdir()
    {
      return $this->hasMany('App\ModelPerdir');
    }
}
