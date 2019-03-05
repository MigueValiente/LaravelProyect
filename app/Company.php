<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Company extends Model
{
    protected $fillable = [
        'name', 'address', 'web', 'email','slug','logo'
    ];

    // protected $table = ' companies';

    public function jobs()
    {
      return $this->hasMany(Job::class);
    }

    // public function getLogoAttribute($logo)
    // {
    //     if( !$logo || starts_with($logo, 'http') ){
    //         return $logo;
    //     }
    //     return Storage::disk('public')->url($logo);
    // }
}
