<?php
/**
 * Created by PhpStorm.
 * User: Максим
 * Date: 02.07.2019
 * Time: 16:21
 */

namespace App\Services;

use App\Specialty;

class CompanyCommandService
{
    static public function getSkillsBySpecialtyName($specialty){

        $specialty_id = Specialty::where('specialty', $specialty)->value('id');
        $specialty = Specialty::find($specialty_id);

        $skills = $specialty->getSpecialtySkills();

        return $skills;
    }

}