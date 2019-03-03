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

    public function applicant()
    {
      return $this->belongsToMany('App\User');
    }
}
