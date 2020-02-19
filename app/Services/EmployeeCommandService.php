<?php
/**
 * Created by PhpStorm.
 * User: Максим
 * Date: 02.07.2019
 * Time: 16:21
 */

namespace App\Services;

class EmployeeCommandService
{

    static public function canDoAction($specialty, $action){

        $skills = CompanyCommandService::getSkillsBySpecialtyName($specialty);

        return $canDoAction = (in_array($action, $skills)) ? 'true' : 'false';
    }

}