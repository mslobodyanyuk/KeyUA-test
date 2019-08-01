<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = [
        'id',
        'skill'
    ];

    /**
     * The specialties that belong to the skill.
     */
    public function specialties()
    {
        return $this->belongsToMany('App\Specialty');
    }
}
