<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelPerdir extends Model
{
    protected $table = 'perdirs';

    public function modelArea()
    {
      return $this->belongsTo('App\ModelArea', 'id_areas');
    }

    public function modelPerdirJenis()
    {
      return $this->belongsTo('App\ModelPerdirJenis', 'id_perdir_jenis');
    }

    public function modelPerdirDetail()
    {
      return $this->belongsTo('App\ModelPerdirDetail', 'id_perdir_details');
    }
}
