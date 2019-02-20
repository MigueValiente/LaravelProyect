<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $guarded = ['id', 'created_at', 'update_at'];

    public function creator()
    {
      return $this->belongsTo('App\User');
    }

    public function company()
    {
      return $this->belongsTo('App\Company');
    }

    public function aplicant()
    {
      return $this->belongsToMany('App\User');
    }
}
