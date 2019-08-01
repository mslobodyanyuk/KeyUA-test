<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SkillSpecialty extends Model
{
    protected $fillable = [
        'id',
        'specialty_id',
        'skill_id'
    ];
}
