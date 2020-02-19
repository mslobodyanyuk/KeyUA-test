<?php

namespace App\Console\Commands;

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

    static public $specialty;//added

    static public $skill;//added
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Match specialty skills to the action';

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
    public function handle()
    {
        $this->info($this->employeeCommandService->canDoAction($this->argument('specialty'), $this->argument('action')));
    }
}
