<?php
/**
 * Created by PhpStorm.
 * User: Максим
 * Date: 02.07.2019
 * Time: 16:21
 */

namespace App\Services;

use App\Employee;

class CompanyCommandService
{
    public function make(Employee $employee, $specialty)
    {
        $employee->getSkills($specialty);
    }

}