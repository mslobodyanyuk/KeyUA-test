<?php

namespace App\Console\Commands;

use App\Employee as employeeModel;
use App\Services\EmployeeCommandService;
use Illuminate\Console\Command;

class Employee extends Command
{
    protected $employeeCommandService;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'employee:can {specialty : specialty of position} {action : certain action of employee};';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(EmployeeCommandService $employeeCommandService)
    {
        parent::__construct();

        $this->employeeCommandService = $employeeCommandService;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(EmployeeModel $employee)
    {
        $this->employeeCommandService->make($employee, $this->argument('specialty'), $this->argument('action'));
    }
}
