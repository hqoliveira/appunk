<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'tb_team';
    protected $fillable = ['name', 'leader', 'description'];
}
