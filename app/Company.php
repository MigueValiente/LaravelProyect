<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'name', 'address', 'web', 'email','slug'
    ];

    // protected $table = ' companies';

    public function jobs()
    {
      return $this->hasMany(Job::class);
    }
}
