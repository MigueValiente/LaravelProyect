<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $guarded = ['id', 'created_at', 'update_at', 'uuid'];
}
