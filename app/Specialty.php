<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
    protected $fillable = [
        'id',
        'specialty'
    ];

    /**
     * The skills that belong to the specialty.
     */
    public function skills()
    {
        return $this->belongsToMany('App\Skill');
    }

    public function getCollectionSkills(){

        foreach ($this->skills as $specialtySkills) {
            $skills[] = $specialtySkills->skill;
        }

        return $skills;
    }

}
