<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\CompanyCommandService;

class Company extends Command
{
    protected $companyCommandService;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'company:employee {specialty : specialty of position}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'The list of employee skills';

    protected $specialty;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(CompanyCommandService $companyCommandService)
    {
        parent::__construct();

        $this->companyCommandService = $companyCommandService;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     *
     *
     *
     */

    public function handle()
    {
        $skills = $this->companyCommandService->getSkills($this->argument('specialty'));

        foreach ($skills as $skill) {
            $this->info(" - ". $skill );
        }
    }

}
