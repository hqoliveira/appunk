<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Scale extends Model
{
    protected $table = 'tb_scale';
    protected $fillable = ['team_id', 'event_id', 'user_id'];
}
