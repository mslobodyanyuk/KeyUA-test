<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{

    protected $fillable = [
        'id',
        'specialty',
        'writeCode',
        'testCode',
        'communicateWithManager',
        'draw',
        'setTasks'
    ];

    public function getSkills($specialty){
        $employees = Employee::where('specialty', $specialty)->get(['writeCode','testCode','communicateWithManager','draw','setTasks'])->toArray();
        $employees = $employees[0];

        foreach( $employees as $skill ) {
            if(!empty($skill)){
                echo " - " . $skill . PHP_EOL;
            }
        }

    }

    public function canDoAction($specialty, $action){
        $canDoAction = Employee::where('specialty', $specialty)->get([$action])->toArray();
        $canDoAction = $canDoAction[0]["$action"];

        echo $canDoAction = (!empty($canDoAction)) ? 'true' . PHP_EOL : 'false' . PHP_EOL;
    }

}