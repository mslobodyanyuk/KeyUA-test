<?php
/**
 * Created by PhpStorm.
 * User: Максим
 * Date: 02.07.2019
 * Time: 16:21
 */

namespace App\Services;

use Illuminate\Support\Facades\DB;

class CompanyCommandService
{

    public function getSkills($specialty){

        $employees = DB::table('employees')->select('writeCode','testCode','communicateWithManager','draw','setTasks')->where('specialty', $specialty)->first();

        $employeeSkills = json_decode(json_encode($employees), True);   //$employeeSkills = $employees[0];

        foreach ($employeeSkills as $skill) {
            if (!empty($skill)) {
                $skills[] = $skill;
            }
        }

        return $skills;
    }

}