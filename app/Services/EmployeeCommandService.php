<?php
/**
 * Created by PhpStorm.
 * User: Максим
 * Date: 02.07.2019
 * Time: 16:21
 */

namespace App\Services;

use App\Employee;

class EmployeeCommandService
{
    public function make(Employee $employee, $specialty, $action)
    {
        $employee->canDoAction($specialty, $action);
    }

}