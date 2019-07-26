<?php
/**
 * Created by PhpStorm.
 * User: Максим
 * Date: 02.07.2019
 * Time: 16:21
 */

namespace App\Services;

use Illuminate\Support\Facades\DB;

class EmployeeCommandService
{
    public function canDoAction($specialty, $action){

        $canDoAction = DB::table('employees')->where('specialty', $specialty)->value($action);

        return $canDoAction = (!empty($canDoAction)) ? 'true' : 'false';
    }

}