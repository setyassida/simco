<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelArea extends Model
{
    protected $table = 'areas';

    public function modelPerdir()
    {
      return $this->hasMany('App\ModelPerdir');
    }
}
